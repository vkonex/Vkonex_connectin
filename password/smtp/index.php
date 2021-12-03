<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$otp_id = $_GET['id'];
$invite ="";
//echo $id;
// connect to the database
$db = mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');
$invite = "";
if(mysqli_connect_error())
{
	die("Connection error :". mysqli_connect_error());
	}else
	{
		//echo("Connection sussessfull........");
	}
	 

	

?>

 





<?php


$otp_check_query = "SELECT * FROM otp INNER JOIN connectin_users ON otp.c_u_id = connectin_users.c_u_id WHERE O_id=$otp_id";
$result = mysqli_query($db, $otp_check_query);
$otp_row = mysqli_fetch_assoc($result);
$otp = $otp_row['OTP'];
$user_email = $otp_row['email'];
// $sql = "SELECT column_name(s)
// FROM table1
// INNER JOIN table2
// ON table1.column_name = table2.column_name;"



// Automatic mail send


include('smtp/PHPMailerAutoload.php');

$html=" <h2 style='color:green'><center>Vkonex-Connectin E-mail Varification</center></h2><br><br>


<br><br>

We heard that you tried to registerd with. Congratulation  about that!

But before that you have to verify your email! <br>You can use the following OTP for email varification: <br>





You one time password is &nbsp;<b><span style='color:green'> $otp</span></b>

<br><br>
If you don’t use this OTP within 5min, it will expire.
To get a new password reset link, visit: http://65.0.131.51/password/email_varification.php?id=$otp_id



";


                
 /*
// has this expired?
$expire_time = "00:05:59"; // Work until Jan 74hr
$now = date("h:i:s");
if ($now>$expire_time) {
    header("Location: page_expire.php");
    die();
}*/

$subject="[Vkonex-Connectin] Please Verify Your Email";

echo smtp_mailer($user_email,$subject,$html);
echo "<h1>Otp Has been sent on your email</h1>";


function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = false;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "singhrajveer60015@gmail.com";
	$mail->Password = "2727284#@lyf";
	$mail->SetFrom("singhrajveer60015@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return "sent";
	}
}
header("location: http://65.0.131.51/password/email_varification.php?id=$otp_id");

?> 