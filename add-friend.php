<?php
include('server.php')
?>
<?php
$user = $_POST['user'];
$friend = $_POST['friend'];
$sql2 = "SELECT * FROM friends WHERE user=$user AND friend=$friend LIMIT 1";
$result2 = mysqli_query($db, $sql2);
$userExist = mysqli_fetch_assoc($result2);
if($userExist['user'] == $user){
    echo "Friend already exists";
}
else{
    $sql = "INSERT INTO requests (user,friend) VALUES($user,$friend)";
    $result = mysqli_query($db, $sql);
    echo $sql;
}

?>