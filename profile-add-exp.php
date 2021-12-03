<?php
include('server.php')
?>
<?php
$is_student = $_POST['is_student'];
$date = $_POST['date'];
$username = $_SESSION['username'];
$user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
    $user_id = $user['c_u_id'];
    if ($is_student == 0) {
        $sql = "UPDATE connectin_users SET experience='$date' WHERE c_u_id=$user_id";
        $result = mysqli_query($db, $sql);
        echo $date;
        //header('location:http://65.0.131.51/profile.php');
    }
} else {
    $sql2 = "UPDATE connectin_users SET is_student='$is_student' WHERE c_u_id=$user_id";
        $result = mysqli_query($db, $sql);
        echo $is_student;
        //header('location:http://65.0.131.51/profile.php');
}

?>