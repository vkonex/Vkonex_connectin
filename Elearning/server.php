<?php
$error=array();
$db= mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');

// echo "connected";
if(isset($_POST['submit']))
{

    // input from form
        $name =mysqli_real_escape_string($db,$_POST['name']);
        $email =mysqli_real_escape_string($db,$_POST['email']);
        $password =mysqli_real_escape_string($db,$_POST['password']);
        $confirm_pswd =mysqli_real_escape_string($db,$_POST['confirm_pswd']);

        if($password!=$confirm_pswd)
        {
            array_push($error,"Password didn't match"); 
        }
        // checking user exist or not
        $user_check="SELECT * FROM admin WHERE name='$name' OR email='$email' LIMIT 1";
        $result=mysqli_query($db,$user_check);
        $user=mysqli_fetch_assoc($result);
        if($user)
        {
              if($user['name']===$name)
              {
                array_push($error,"This user already exist");
              }
              if($user['email']===$email)
              {
                array_push($error,"This email already exist");
              }
        }
        // final registration if no error
        if((count($error) == 0) )
        {
            $encrypt_pswd=md5($password);//encryption before saving
            $query=" INSERT INTO admin (name,email,password) VALUES('$name','$email','$encrypt_pswd')";
            mysqli_query($db,$query);
            header('location:admin/dashboard_analytics.php');
        }

}

if(isset($_POST['login']))
{

    // input from form
        
        $Loginemail =mysqli_real_escape_string($db,$_POST['Loginemail']);
        $Loginpassword =mysqli_real_escape_string($db,$_POST['Loginpassword']);

        if((count($error) == 0) )
        {
            $decrypt_pswd = md5($Loginpassword);
            $query = "SELECT * FROM admin WHERE email='$Loginemail' AND password='$decrypt_pswd'"; 
            
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1){
              header('location:admin/dashboard_analytics.php');

            }
            else{
              array_push($error,"Wrong login information");
            }
        }
        
}
?>