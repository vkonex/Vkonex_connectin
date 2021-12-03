<?php

include('server.php')



 ?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<base href="/">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<title>Registrations | Vkonex-connectin</title>
		<meta name="description" content="Geoconnectin">
	
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
		<link href='' rel='shortcut icon'>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="themes/geoconnectin/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="themes/geoconnectin/assets/css/style.css">

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
		 
	 
		
	</head>

	<body>
		<div class="login-dark">
			<div class="form_wrap">
				<div class="illustration"></div>
 
				
    <h2 class="head_sgn">Sign up</h2>
    <form method="POST">
    <?php include('errors.php'); ?>
        
        <div class="form-wrapp">
            <div class="form-group">
                <input class="form-control" type="text" name="username" value="" placeholder="Name" required value="<?php echo $username; ?>">
                
                            </div>
            
            <div class="form-group">
                <input class="form-control" type="email" name="email" value="" placeholder="Email" required value="<?php echo $email; ?>">

                            </div>
                            
                             <div class="form-group">
                <input class="form-control" type="number" min="10" maxlength="10" name="mobile" value="" placeholder="Mobile" required value="<?php echo $mobile; ?>">

                            </div>
            
            <div class="form-group">
                <input class="form-control" type="password" minlength="8" name="password_1" placeholder="Password">

                            </div>
                            
                             <div class="form-group">
                <input class="form-control" type="password" name="password_2" placeholder="Confirm Password">

                            </div>

            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="register">Sign Up</button></div>

            <p class="signup_lnk">Already on vkonex? <a href="http://65.0.131.51/login.php">Sign In</a></p>
        </div>
    </form>

				
    	        <div class="term_policy">
					<p>When you sign in to vkonex, you agree with our<br> <a href="http://65.0.131.51/terms&conditions.php">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
				</div>
			</div>
		</div>

			</body>
</html>