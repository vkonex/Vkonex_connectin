<?php
session_start();
$username = $_SESSION['username'];
$db = mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');
$query = "SELECT * FROM `connectin_users` WHERE username='$username'";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);
?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="all-set-bg">
  
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
	<a href="dashboard.php" class="navbar-brand hide-on-mobile"><img src="themes/geo/assets/img/AI/foot-logo.png" class="img-fluid logo_login"></a>  		
  <div class="nav-item dropdown hide-on-desk">
  				<a href="http://65.0.131.51/" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user['profilepic']);?>" class="avatar" alt="Avatar" class="avatar">  <b class="caret"></b></a>

				<div class="dropdown-menu">
				<a href="http://65.0.131.51/profile.php"  class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
        <a href="http://65.0.131.51/profile.php" class="dropdown-item"><i class="fa fa-cog"></i> Settings</a>
			
					<div class="divider dropdown-divider"></div>

          

					<a href="password/logout.php?logout'1'" class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          
          
          <form id="logout-form"  method="POST" style="display: none;">
          <input type="hidden" name="_token" value="">          </form>
        </div>
			</div>

	<!-- Collection of nav links, forms, and other content for toggling -->
		<form class="navbar-form form-inline mobile-nav" method="GET" action="http://65.0.131.51/searchkeyword.php">
      <div class="input-group search-box">								
				<input type="text" id="keyword" name="keyword" class="form-control" placeholder="Search here..." value="">
				<button class="input-group-addon"><i class="fa fa-search"></i></button>
       <ul id="resultData"> </ul>
			</div>
		</form>

        <div class="nav-item hide-on-desk">
          <a href="/chat-mobile.php" class="nav-link"><i class="fa fa-commenting" id="ButtonC" aria-hidden="true"></i><span></span></a>
          </div>

		<div class="navbar-nav ml-auto desktop-navbar">
    <a href="http://65.0.131.51/apply_job.php" class="nav-item nav-link active"><i class="fa fa-briefcase" aria-hidden="true"></i><span>Jobs</span></a>
			<a href="Elearning/index.php" class="nav-item nav-link"><i class="fas fa-cogs"></i><span>E-learning</span></a>
			<a href="http://52.66.70.230/" class="nav-item nav-link"><i class="fas fa-pen-square" aria-hidden="true"></i><span>Assessment</span></a>
			<a href="http://65.0.131.51/explore.php" class="nav-item nav-link"><i class="fa fa-compass" aria-hidden="true"></i><span>Explore</span></a>
			<div class="nav-item dropdown">
        
      				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user['profilepic']);?>" class="avatar" alt="Avatar"> <?php echo $username; ?>  <b class="caret"></b></a>
              <div class="dropdown-menu">
					<a href="http://65.0.131.51/profile.php"  class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a>
				
					<div class="divider dropdown-divider"></div>
					<a href="password/logout.php?logout'1'" class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          <form id="logout-form" action="" method="POST" style="display: none;">
          <input type="hidden" name="_token" value="QiNYCI0Fni60mgD1OEtVVQvXxWXJEF66pqjaCRs3">          </form>
        </div>
			</div>
		</div>
</nav>


<!-- Mobile Bottom Nav -->
	<div class="mobile-bottom-navbar">
  <ul class="nav nav-justified">
        <li class="nav-item">
          <a href="http://65.0.131.51/apply_job.php" class="nav-link active"><i class="fa fa-briefcase" aria-hidden="true"></i><span>Jobs</span></a>
        </li>
        <li class="nav-item">
          <a href="http://65.0.131.51/dashboard.php" class="nav-link"><i class="fa fa-gears"></i><span>E-learning</span></a>
        </li>
        <li class="nav-item">
          <a href="http://52.66.70.230/" class="nav-link"><i class="fa fa-pencil-square" aria-hidden="true"></i><span>Assessment</span></a>
        </li>
        <li class="nav-item">
          <a href="http://65.0.131.51/explore.php" class="nav-link"><i class="fa fa-compass" aria-hidden="true"></i><span>Explore</span></a>
        </li>
        <!-- <li class="nav-item">
          <a href="/dashboard" class="nav-link"><i class="fa fa-commenting" aria-hidden="true"></i><span>Chat</span></a>
        </li> -->
      </ul>
  </div>

