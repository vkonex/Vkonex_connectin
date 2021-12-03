<?php
include('server.php')
?>
<?php
$username = $_GET["username"];
function getprofilepic($username){
    require 'vendor/autoload.php';
      //Get an instance of S3 Client. This is one one to do it:
      $s3 = new Aws\S3\S3Client([
          'region'  => 'ap-south-1',
          'version' => 'latest',
          'credentials' => [
              'key'    => "AKIASOZSJJ322O2QHCUJ",
              'secret' => "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",
          ]
      ]);
  
      //Get a command to GetObject
      $cmd = $s3->getCommand('GetObject', [
          'Bucket' => 'vkonexconnect',
          'Key'    => "$username.jpeg"
      ]);
  
      //The period of availability
      $request = $s3->createPresignedRequest($cmd, '+10 minutes');
  
      //Get the pre-signed URL
      $signedUrl = (string) $request->getUri();
  
      echo $signedUrl;
  }
echo getprofilepic($username);
?>