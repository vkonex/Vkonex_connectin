<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($mobile)) { array_push($errors, "Mobile is required"); }

  // first check the database to make sure 
  
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM connectin_users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO connectin_users (username, email, mobile,password) 
  			  VALUES('$username', '$email', '$mobile','$password')";
  	mysqli_query($db, $query);
    $last = mysqli_insert_id($db);
    $otp = mt_rand(000000,999999);
    date_default_timezone_set('Asia/Kolkata');      
    $date=date("Y/m/d H:i:s");
    $query2 = "INSERT INTO otp (c_u_id, OTP, otp_created) VALUES($last, '$otp','$date')";
  	mysqli_query($db, $query2);
    $otp_id = mysqli_insert_id($db);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
   header("location:http://65.0.131.51/password/smtp/index.php?id=$otp_id");
  	
  }
}

// ... login


// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM connectin_users WHERE email='$username' AND password='$password' AND E_verified=True";
  	$results = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($results);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $user['username'];
      $_SESSION['logged_in'] = true;
      $_SESSION['id'] = $user['c_u_id'];
  	  $uid = $user['c_u_id'];
      $_SESSION['start'] = time(); // Taking now logged in time.
      // Ending a session in 30 minutes from the starting time.
      $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
      $query2 = "UPDATE connectin_users SET status='active' WHERE c_u_id=$uid";
  	  $results2 = mysqli_query($db, $query2);
	    header('location: http://65.0.131.51/dashboard.php');
  	}else {
  		array_push($errors, "Wrong login credentials");
  	}
  }
}



?>