<?php
include('../server.php')
?>
<?php
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
        $user_check="SELECT * FROM student WHERE name='$name' OR email='$email' LIMIT 1";
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
            header('location:manage-cource.php');
        }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;1,100&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
    }

    h3 {
        margin-top: 30px;
        color: #3f51b5;
        font-size: 2rem;
        font-weight: bold;
    }

    h5 {

        color: #3f51b5;
        font-size: 1rem;
    }

    img {
        margin-top: 50px;
    }

    .btn {
        background-color: #3f51b5;
        color: #fff;
        width: 25rem;
        height: 3rem;
    }

    .btn:hover {
        background-color: orangered;
        color: #fff;
        outline: none;
    }

    .form-control {
        display: inline;
        justify-content: center;
        align-items: center;
        width: fit-content;
        width: 25rem;
        height: 4rem;
        border: none;
        box-shadow: 0 4px 8px 0 #ecf0f1;
        text-align: left;
    }

    .main {
        background-color: #fcfbfb;
        box-shadow: 0 4px 8px 0 #ecf0f1;
        padding-top: 20px;
        width: 500px;
        height: 750px;
    }

    @media (max-width:480px) {
        h3 {
            margin-left: 50px;
        }

        img {
            margin-left: 50px;
        }
    }
    .forms{
        margin-top: 9rem;
        line-height: 2rem;
    }
    .image-conatiner 
    {
      margin-top:3rem;
    }
    .text
    {
        color: orangered;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="text-center">
                    <img src="../images/logo.png" class="img-fluid" width="150px">
                        <h3 >Vkonex-Online tutoring software</h3>
                </div>
                <div class="image-conatiner">
                    <img src="../images/ill.png" class="img-fluid">
                </div>
                
        </div>
        <div class="col-xl-6 col-md-6 forms">
            <form  method="POST"> 
                
                <center>
                    <div class="main ">
                        <h3>Student Sign Up</h3>
                        <p>Already Have account ?<a href="loginS.php"><span class="text">Login</span><a></p>
                        <p></p>
                        <?php
                include('../error.php');
                ?>
                        <div class="form-group mt-5">
                            <h5><label for="exampleInputEmail1">Name</label></h5>
                            <input type="text" class="form-control " id="exampleInputEmail1"  name="name" required
                                aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="form-group ">
                            <h5><label for="exampleInputEmail1">Email address</label></h5>
                            <input type="email" class="form-control " id="exampleInputEmail1" name="email" required
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <h5><label for="exampleInputPassword1">Password</label></h5>
                            <input type="password" class="form-control input-sm" id="exampleInputPassword1" name="password" required
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <h5><label for="exampleInputPassword1"> Confirm Password</label></h5>
                            <input type="password" class="form-control input-sm" id="exampleInputPassword1" name="confirm_pswd" required
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-lg" name="submit">Submit</button>
            </form>
        </div>
        </center>
        </div>

    </div>

    </div>

</body>

</html>