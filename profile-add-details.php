<?php
include('server.php')
?>
<?php


$job = $_GET['job'];
$fullname = $_GET['fullname'];
$username = $_GET['username'];
$email = $_GET['email'];
$phno = $_GET['phno'];
$exp = $_GET['exp'];
$college = $_GET['college'];
$Resume =$_GET['Resume'];
$gender = $_GET['gender'];


$user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
    $user_id = $user['c_u_id'];

    $sql2 = "SELECT * FROM fill_details WHERE lastname='$username' AND job=$job";
    $result2 = mysqli_query($db, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        echo "Already added";
    } else {
        $sql = "INSERT INTO fill_details (firstname,lastname,email,phno, 'exp',college,resume,gender,job) VALUES ('$fullname','$username','$email',$phno,$exp,'$college','$Resume',$gender,$job)";
        $result = mysqli_query($db, $sql);
    }
    header('location:http://65.0.131.51/profile.php');
} else {
    echo "Failed";
}

?>