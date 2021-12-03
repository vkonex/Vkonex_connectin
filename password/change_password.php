<?php

include('../server.php')



 ?>
 <?php
if (isset($_POST['change_pw'])) {
	$user_id = $_GET["id"];
    $password = $_POST["password"];
    $re_pass = $_POST["re_pass"];
	if($password == $re_pass){
		$password_1 = md5($password);
		$sql = "UPDATE connectin_users SET password='$password_1' WHERE c_u_id=$user_id";
		$result = mysqli_query($db, $sql);
		header("location: http://65.0.131.51/password/change_password_message.php");
	}else{
		array_push($errors, "You entered password didn't match");
 	}
  }
 ?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<base href="/">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<title>Create Password | Vkonex-connectin</title>
		<meta name="description" content="Geoconnectin">
	
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
		<link href='themes/geoconnectin/images/favicon.ico' rel='shortcut icon'>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="themes/geoconnectin/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="themes/geoconnectin/assets/css/style.css">

		 
		
	</head>

	<body>
		<div class="login-dark">
			<div class="form_wrap">
				<div class="illustration"></div>

				    
    <h2 class="head_sgn">Create New Password</h2>

	<?php include('../errors.php'); ?>
    <form method="POST">
         <input type="hidden" name="_token" value="tp959X2wYqFVTr2cmcGZv2waywvxeSiJFVTTRcvM">
        <div class="form-wrapp">
            
            <div class="form-group">
                <input class="form-control" type="password" minlength="8" name="password" id="password" required value="" placeholder="New Password">

                            </div>
                            
                             <div class="form-group">
                <input class="form-control" type="password" name="re_pass" id="password" required value="" placeholder="Confirm New Password">

                            </div>

            <div class="form-group">
                <div class="col-xs-8">
                    <button name="change_pw" type="submit" class="btn btn-primary btn-block btn-flat">
                        Change Password
                    </button>
                </div>
            </div>
                <p class="signup_lnk"><a href="http://65.0.131.51/login.php"> Login Here </a></p>
        </div>
    </form>

				
    	        <div class="term_policy">
					<p>When you sign in to vkonex, you agree with our<br> <a href="http://65.0.131.51/terms&amp;conditions">Terms of Use</a> and <a href="http://65.0.131.51/privacy-policy">Privacy Policy</a>.</p>
				</div>
			</div>
		</div>

			</body>
</html>