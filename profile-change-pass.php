<?php
include('server.php')
?>
<?php
    $current_password = $_POST['current_password'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $username = $_SESSION['username'];
    $user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        $curr_hash = md5($current_password);
        if($user['password'] == $curr_hash){
            $user_id = $user['c_u_id'];
            $password_1 = md5($password);
            $sql = "UPDATE connectin_users SET password='$password_1' WHERE c_u_id=$user_id";
            $result = mysqli_query($db, $sql);
            echo "success";
        }
    }else{
        echo "Failed";
    }
   
?>