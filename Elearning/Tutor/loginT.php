<?php
include('../server.php')
?>
<?php
session_start();
?>
<?php
if(isset($_POST['login']))
{

    // input from form
        
        
        $Loginpassword =mysqli_real_escape_string($db,$_POST['Loginpassword']);

        if((count($error) == 0) )
        {
            $decrypt_pswd = md5($Loginpassword);
            $query = "SELECT * FROM connectin_users WHERE password='$decrypt_pswd'"; 
            
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1){
              header('location:manage-cource.php');

            }
            else{
              array_push($error,"Wrong login information");
            }
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
        height: 600px;
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
            <form method="POST"> 
                <center>
                    <div class="main ">
                    <h3>Hi !</h3>
                        <h3><?php echo $_SESSION['username']; ?></h3>
                        <h5>please enter your password</h5>
                        <?php
                include('../error.php');
                ?>
                        <!--<div class="form-group mt-5">
                            <h5><label for="exampleInputEmail1">Email address</label></h5>
                            <input type="email" name="Loginemail" class="form-control " id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>-->
                        <div class="form-group">
                        
                            <input type="password" required name="Loginpassword" class="form-control input-sm" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check ">
                            <a href="#"><label class="form-check-label" for="exampleCheck1"><a href="../../password/reset.php"><span class="text">Forgot Password ?</span></a></label></a>
                        </div>
                        <button type="submit" name="login" class="btn btn-lg">Login</button>
            </form>
        </div>
        </center>
        </div>

    </div>

    </div>

</body>

</html>