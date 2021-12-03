<?php

include('../server.php')



?>
<?php
$id = $_GET["id"];
?>

<?php
if (isset($_POST['otp_submit'])) {
  $otp_id = $_POST["id"];
  $otp_input = $_POST["OTP"];
  $otp_check_query = "SELECT * FROM otp WHERE O_id=$otp_id";
  $result = mysqli_query($db, $otp_check_query);
  $otp_row = mysqli_fetch_assoc($result);
  date_default_timezone_set('Asia/Kolkata');
  $date = date("Y/m/d H:i:s");
  $date_now = strtotime($date);
  $otp = $otp_row['OTP'];
  $created = $otp_row['otp_created'];
  $datetime1 = strtotime($created);
  $diff = $date_now - $datetime1;
  $user_id = $otp_row['c_u_id'];
  if ($otp_input == $otp) {
    if ($diff <= 360) {
      $sql = "UPDATE connectin_users SET E_verified=True WHERE c_u_id=$user_id";
      $result2 = mysqli_query($db, $sql);
      header("location: http://65.0.131.51/password/change_password.php?id=$user_id");
    } else {
      echo "Time Expired";
    }
  } else {
    array_push($errors, "It seems you entered wrong OTP");
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <base href="/">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>OTP Varification | Vkonex-connectin</title>
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


      <h2 class="head_sgn">OTP Varification</h2>
      <?php include('../errors.php'); ?>

      <form method="POST">
        <input type="hidden" name="_token" value="tp959X2wYqFVTr2cmcGZv2waywvxeSiJFVTTRcvM">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <div class="form-wrapp">

          <div class="form-group">
            <input class="form-control" type="password" name="OTP" id="OTP" value="" placeholder="Enter OTP">

          </div>

          <div class="form-group">
            <div class="col-xs-8">
              <button name="otp_submit" type="submit" class="btn btn-primary btn-block btn-flat">
                Submit OTP
              </button>

            </div>
          </div>
          <p class="signup_lnk"><a href="http://65.0.131.51/password/smtp/index.php"> Resend OTP </a> &nbsp;<span style="color: black;"> <span id="timer"></span></p>
        </div>
      </form>



    </div>
  </div>





</body>

<script>
  document.getElementById('timer').innerHTML =
    03 + ":" + 59;
  startTimer();


  function startTimer() {
    var presentTime = document.getElementById('timer').innerHTML;
    var timeArray = presentTime.split(/[:]+/);
    var m = timeArray[0];
    var s = checkSecond((timeArray[1] - 1));
    if (s == 59) {
      m = m - 1
    }
    if (m < 0) {
      return
    }

    document.getElementById('timer').innerHTML =
      m + ":" + s;
    console.log(m)
    setTimeout(startTimer, 1000);

  }

  function checkSecond(sec) {
    if (sec < 10 && sec >= 0) {
      sec = "0" + sec
    }; // add zero in front of numbers < 10
    if (sec < 0) {
      sec = "59"
    };
    return sec;
  }
</script>


</html>