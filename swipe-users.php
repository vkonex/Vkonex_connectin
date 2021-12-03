<?php
session_start();
    include('server.php');
    $user_interest_query = 'SELECT * FROM interests INNER JOIN connectin_users ON interests.c_u_id=connectin_users.c_u_id WHERE username="'.$_SESSION['username'].'"';
    $result_interest = mysqli_query($db,$user_interest_query);
    $user_goal_query = 'SELECT * FROM goals INNER JOIN connectin_users ON goals.c_u_id=connectin_users.c_u_id WHERE username="'.$_SESSION['username'].'"';
    $result_goal = mysqli_query($db,$user_goal_query);
    $sql = "SELECT connectin_users.c_u_id AS c_u_id,username,email,mobile,d_title,organization,location,bio,industry,status,profilepic FROM interests INNER JOIN connectin_users ON interests.c_u_id=connectin_users.c_u_id WHERE ";    
    $i = 0;
    while($row = mysqli_fetch_array($result_interest)){
        if($i != 0){
            $sql .=" OR ";
        }
        $sql .= "interest LIKE '%".$row['interest']."%'";
        $i = 1;
    }
    $sql .= " UNION ";
    // while($row = mysqli_fetch_array($result_goal)){
    //     $sql .= " OR goal LIKE '%".$row['goal']."%'";
    // }
    $sql .= "SELECT connectin_users.c_u_id,username,email,mobile,d_title,organization,location,bio,industry,status,profilepic FROM goals INNER JOIN connectin_users ON goals.c_u_id=connectin_users.c_u_id WHERE ";    
    $i = 0;
    while($row = mysqli_fetch_array($result_goal)){
        if($i != 0){
            $sql .=" OR ";
        }
        $sql .= "goal LIKE '%".$row['goal']."%'";
        $i = 1;
    }
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
    echo mysqli_num_rows($result);

?>
