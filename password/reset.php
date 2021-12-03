<?php

include('../server.php')



 ?>
<?php
 if (isset($_POST['send_otp'])) {
    $email = $_POST["email"];
    $user_check_query = "SELECT * FROM connectin_users WHERE email='$email' LIMIT 1";
  	$result = mysqli_query($db, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
	$user_id = $user['c_u_id'];
	$otp = mt_rand(000000,999999);
	date_default_timezone_set('Asia/Kolkata');      
    $date=date("Y/m/d H:i:s");
    $query2 = "INSERT INTO otp (c_u_id, OTP, otp_created) VALUES($user_id, '$otp','$date')";
  	mysqli_query($db, $query2);
    $otp_id = mysqli_insert_id($db);
   	header("location:http://65.0.131.51/smtp/index.php?id=$otp_id");
  }

?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<base href="/">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<title>Forgot Password | Vkonex-connectin</title>
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

				    
    <h2 class="head_sgn">Forgot Password</h2>
    <form method="POST">
        <div class="form-wrapp">
            
            <div class="form-group">
                <input class="form-control" type="text" name="email" id="email" value="" placeholder="E-Mail Address" required value="Enter Your Email">

                            </div>

            <div class="form-group">
                <div class="col-xs-8">
                    <button name="send_otp" type="submit" class="btn btn-primary btn-block btn-flat">
                        Send OTP
                    </button>
                </div>
				
            </div>
			
                <p class="signup_lnk">
					
				<span style="color:black"><b>OR</b></span><br>
				<a href="http://65.0.131.51/login.php"> Login Here </a></p>
        </div>
    </form>

				
    	        <div class="term_policy">
					<p>When you sign in to vkonex, you agree with our<br> <a href="http://65.0.131.51/terms&amp;conditions">Terms of Use</a> and <a href="http://65.0.131.51/privacy-policy">Privacy Policy</a>.</p>
				</div>
			</div>
		</div>

			</body>
</html>