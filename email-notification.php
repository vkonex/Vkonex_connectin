<?php
include("server.php")
?>

<?php
$value = $_GET["value"];
$username = $_SESSION['username'];
$sql = "UPDATE connectin_users SET email_notification=$value WHERE username='$username'";
if (mysqli_query($db, $sql)) {
    echo "Success";
} else {
    echo "Failed";
}
?>