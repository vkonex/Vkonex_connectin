<?php
session_start();
include_once "config.php";
$sender = $_SESSION['id'];
$reciever = mysqli_real_escape_string($conn, $_POST['incoming_id']);
$output = "";
$sql = "SELECT * FROM messages WHERE (sender_id=$sender AND reciever_id=$reciever)
                OR (sender_id = $reciever AND reciever_id = $sender) ORDER BY msg_id";
$sql2 = "SELECT profilepic FROM connectin_users WHERE c_u_id=$reciever";
$query = mysqli_query($conn, $sql);
$query2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($query2);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $msg = $row['msg'];
        $msgstr = "";
        if ($row['type'] == 'file') {
            $newmsg = explode("___", $msg)[1];
            $msgstr = '<a style="color:white;text-decoration:underline;" href="php/uploads/' . $msg . '" download="'.$msg.'">' . $newmsg . '</a>';
        } else {
            $msgstr = $msg ;
        }
        if ($row['sender_id'] == $sender) {
            $output .= '<div class="chat outgoing">
            <div class="details" style="padding:15px 20px;background: white;margin: 5px 0px;border-radius: 50px;display: inline;font-weight: bold;float:right;">
                '. $msgstr .'
            </div>
            </div>
           ';
        } else {
            $output .= '<div class="chat incoming">
                                
            <div class="details" style="color:white;padding: 15px 20px;background:#850d71;margin: 5px 0px;border-radius: 50px;display: inline;font-weight: bold;">
            '. $msgstr .'
            </div>
            </div>
            ';
        }
    }
} else {
    $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
}
echo $output;
