<?php
    session_start();
    include_once "config.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM connectin_users WHERE username LIKE '%{$searchTerm}%' AND status='active'";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $sender=$myid;
        $reciever = $row['c_u_id'];
        $sql2 = "SELECT * FROM messages WHERE (sender_id=$sender AND reciever_id=$reciever)
                OR (sender_id = $reciever AND reciever_id = $sender) ORDER BY msg_id LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if ($row2['type'] == 'file') {
            $newmsg = explode("___", $msg)[1];
            $msg = $newmsg;
        }
        if(isset($row2['sender_id'])){
            ($sender == $row2['sender_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
            if($row['c_u_id'] != $myid){
                $output .= '<a href="chat.php?user_id='. $row['c_u_id'] .'">
                <div class="content">
                <img src="data:image/jpg;charset=utf8;base64,'. base64_encode($row['profilepic']) .'" alt="">
                <div class="details">
                    <span>'. $row['username'] .'</span>
                    <p>'. $you . $msg .'</p>
                </div>
                </div>              
            </a>';
            }         
        }
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>