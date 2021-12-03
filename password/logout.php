<?php   
session_start(); //to ensure you are using same session
$db = mysqli_connect('database-2.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', '12345678', 'vkonex_ai');
$uid = $_SESSION['id'];
$query2 = "UPDATE connectin_users SET status='inactive' WHERE c_u_id=$uid";
$results2 = mysqli_query($db, $query2);
session_destroy(); //destroy the session
header("location:../index.php"); //to redirect back to "index.php" after logging out
exit();
?>