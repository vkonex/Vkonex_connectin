<?php
include('server.php')
?>

<?php
	if(isset($_FILES['profile'])){
		$file_name = $_FILES['profile']['name'];   
		$temp_file_location = $_FILES['profile']['tmp_name']; 
        $username = $_SESSION['username'];
		$imgData = addslashes(file_get_contents($_FILES['profile']['tmp_name']));
		$profile_query = "UPDATE connectin_users SET profilepic='$imgData' WHERE username='$username'";
  		$result = mysqli_query($db, $profile_query);
		  //data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']);
		// require 'vendor/autoload.php';

		// $s3 = new Aws\S3\S3Client([
		// 	'region'  => 'ap-south-1',
		// 	'version' => 'latest',
		// 	'credentials' => [
		// 		'key'    => "AKIASOZSJJ322O2QHCUJ",
		// 		'secret' => "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",
		// 	]
		// ]);		

		// $result = $s3->putObject([
		// 	'Bucket' => 'vkonexconnect',
		// 	'Key'    => "$username.jpeg",
		// 	'SourceFile' => $temp_file_location			
		// ]);

		// var_dump($result);
	}
?>
