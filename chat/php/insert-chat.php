<?php 
session_start();
    include_once "config.php";
    $sender = $myid;
    $reciever = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);







    $target_dir = "uploads/";
    $filename = time().'___'.basename($_FILES["file"]["name"]);
$target_file = $target_dir . $filename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 500000) {
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    $sql2 = mysqli_query($conn, "INSERT INTO messages (sender_id, reciever_id, msg,type)
                                        VALUES ({$sender}, {$reciever}, '{$filename}','file')");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}













    if(!empty($message)){
        $sql = mysqli_query($conn, "INSERT INTO messages (sender_id, reciever_id, msg)
                                        VALUES ({$sender}, {$reciever}, '{$message}')") or die();
    }    
?>