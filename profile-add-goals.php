<?php
include('server.php')
?>
<?php
    $goals = $_POST['goals'];
    $goal_arr = explode(",",$goals);
    $username = $_SESSION['username'];
    $user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        $user_id = $user['c_u_id'];
        // $sql = "UPDATE connectin_users SET bio='$bio' WHERE c_u_id=$user_id";
        // $result = mysqli_query($db, $sql);
        $sql = "";
        for ($i = 0; $i < count($goal_arr); $i++) {
            $goal = $goal_arr[$i];
            $sql .= "INSERT INTO goals (c_u_id,goal) VALUES ($user_id,'$goal');";
        }
        mysqli_multi_query($db, $sql);
        echo "success";
    }else{
        echo "Failed";
    }
   
?>