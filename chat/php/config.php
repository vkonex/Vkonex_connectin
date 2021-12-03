<?php
  $conn = mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
  $myid=$_SESSION['id']; 
?>
