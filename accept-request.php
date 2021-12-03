<?php
include('server.php');
$id=$_GET['id'];
$sql = "SELECT * FROM requests WHERE R_id=$id";
$result = mysqli_query($db, $sql);
$request = mysqli_fetch_assoc($result);
$user = $request['user'];
$friend = $request['friend'];
$sql2 = "DELETE FROM requests WHERE R_id=$id";
$result2 = mysqli_query($db, $sql2);
$sql3 = "INSERT INTO friends (user,friend) VALUES($user,$friend)";
$result3 = mysqli_query($db, $sql3);
header('location:http://65.0.131.51/dashboard.php');

?>