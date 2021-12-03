<?php
include('server.php')
?>
<?php
$Position = $_GET['position'];
$Organisation = $_GET['organization'];
$duration = $_GET['duration'];
$username = $_SESSION['username'];
$user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
    $user_id = $user['c_u_id'];

    $sql2 = "SELECT * FROM privious_experiance WHERE c_u_id=$user_id AND Position='$Position' AND Organisation='$Organisation' AND duratiom=`$duration`" ;
    $result2 = mysqli_query($db, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        echo "Already added";
    } else {
        $sql = "INSERT INTO privious_experiance (c_u_id,Position,Organisation,duratiom) VALUES ($user_id,'$Position','$Organisation','$duration')";
        $result = mysqli_query($db, $sql);
        echo $Position;
        echo "<br>";
        echo $Organisation;
        echo "<br>";
        echo $duration;
    }
    header('location:http://65.0.131.51/profile.php');
} else {
    echo "Failed";
}

?>