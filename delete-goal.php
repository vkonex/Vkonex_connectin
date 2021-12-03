<?php
include('server.php')
?>
<?php
    $username = $_SESSION['username'];
    $user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        $user_id = $user['c_u_id'];
         $sql = "DELETE FROM goals WHERE c_u_id=$user_id";
         $result = mysqli_query($db, $sql);
        header('location:http://65.0.131.51/profile.php');
    }else{
        echo "Failed";
    }
   
?>