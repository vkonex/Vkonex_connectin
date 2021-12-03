<?php
    session_start();
    include_once "config.php";
    $sql = "SELECT * FROM connectin_users WHERE status='active'";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "";
    }elseif(mysqli_num_rows($query) > 0){
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
            if($row['username'] != $_SESSION['username']){
                $output .= '<li class="menu">
                <a href="http://65.0.131.51/dashboard.php?chat='. $row['c_u_id'] .'">
                
                  <div class="user-summary  is-new">
                    <div class="avatar-header">
                      <img src="data:image/jpg;charset=utf8;base64,'. base64_encode($row['profilepic']) .'" class="user-avatar-left">
                      <div class="badge new-message">&nbsp;</div>
                    </div>
                    <div class=" user-detail text-left">
                      <h4 class="user-name text-truncate" title="2062466">'. $row['username'] .'</h4>
                      <p class="user-description text-truncate  icon--white" style="white-space: nowrap;"><span>'. $row['d_title'] .'</span><span> at '. $row['organization'] .'</span></p>
                      <!-- <div class="text-truncate text-secondary font-weight-bold">Pardon?</div> -->
                    </div>
                    <!--  <div class="time-in-timeline"><span>Tuesday</span></div> -->
                  </div>
                </a>
                </li>';
            }         
        }
    }
    echo $output;
?>
<!-- <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div> -->