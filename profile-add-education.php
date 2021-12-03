<?php
include('server.php')
?>
<?php
$school = $_GET['school'];
$degree = $_GET['degree'];
$username = $_SESSION['username'];
$user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
    $user_id = $user['c_u_id'];

    $sql2 = "SELECT * FROM education WHERE c_u_id=$user_id AND school='$school' AND degree='$degree'";
    $result2 = mysqli_query($db, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        echo "Already added";
    } else {
        $sql = "INSERT INTO education (c_u_id,school,degree) VALUES ($user_id,'$school','$degree')";
        $result = mysqli_query($db, $sql);
        echo $school;
        echo "<br>";
        echo $degree;
    }
    header('location:http://65.0.131.51/profile.php');
} else {
    echo "Failed";
}

?>