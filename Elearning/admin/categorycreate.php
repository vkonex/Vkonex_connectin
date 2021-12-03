<?php
$error=array();
$db=mysqli_connect('localhost','root','','vkonex_ai');
?>


<?php
if(isset($_POST['submit']))
{

  // input from form
  $name  =mysqli_real_escape_string($db,$_POST['name']);       
  $ordering =mysqli_real_escape_string($db,$_POST['ordering']);
  $alias =mysqli_real_escape_string($db,$_POST['alias']);
  $active =mysqli_real_escape_string($db,$_POST['active']);

      // checking user exist or not
      $user_check="SELECT * FROM create_category  WHERE name='$name' OR ordering='$ordering' LIMIT 1";
      $result=mysqli_query($db,$user_check);
      $user=mysqli_fetch_assoc($result);
      if($user)
      {
            if($user['name']===$name)
            {
              array_push($error,"This user already exist");
            }
            if($user['ordering']===$ordering)
            {
              array_push($error,"This ordering already exist");
            }
      }
      // final registration if no error
      if((count($error) == 0) )
      {

        $query=" INSERT INTO  create_category  (name,ordering,alias,active) VALUES ('$name', '$ordering','$alias', '$active')";
        mysqli_query($db,$query);
        header('location:dashboard_filter_catogries_listcatogries.php');
      }

}
?>




<?php
require_once ("index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- #67757c  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Grade create</title>
</head>
<style>
    body {
        font-family: Lato, sans-serif;
        overflow-x: hidden;
    }

    .form-label {
        color: #67757c;
        font-weight: bold;
        font-size: 16px;
    }

    .files input {
        outline: 2px dashed #92b0b3;
        outline-offset: -10px;
        -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
        transition: outline-offset .15s ease-in-out, background-color .15s linear;
        padding: 120px 0px 85px 35%;
        text-align: center !important;
        margin-top: 30px;
        width: 100% !important;
    }

    .files input:focus {
        outline: 2px dashed #92b0b3;
        -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
        transition: outline-offset .15s ease-in-out, background-color .15s linear;
        border: 1px solid #92b0b3;
    }

    .files {
        position: relative
    }

    .files:after {
        pointer-events: none;
        position: absolute;
        top: 100px;
        left: 0;
        width: 40px;
        right: 0;
        height: 56px;
        content: "";
        background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
        display: block;
        margin: 0 auto;
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .files:before {
        position: absolute;
        bottom: 10px;
        left: 0;
        pointer-events: none;
        width: 100%;
        right: 0;
        height: 57px;
        content: " or drag it here. ";
        display: block;
        margin: 0 auto;
        color: #99abb4;
        font-weight: 600;
        text-transform: capitalize;
        text-align: center;
    }

</style>

<body style="background-color:#dfe6e9" >
<?php
 require('../error.php')
 ?>
    <h3 style="color:#398bf7" class="ms-5"> Create New Category</h3>
    <div class="conatiner mt-5">
        <div class="row">
            <div class="col-md-11 col-xl-11 col-11 ms-md-5 " style="background-color: #fff;height: 650px;">
                <form class="row g-3  mt-3" method="POST">
                    <div class="col-md-6">
                        <label class="form-label">
                            <p>Name</p>
                        </label>
                        <input type="text" placeholder="Enter name" class="form-control" name="name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            <p>Alias</p>
                        </label>
                        <input type="text" placeholder="Enter Alias" class="form-control" name="alias">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            <p>Ordering</p>
                        </label>
                        <input type="text" placeholder="0" class="form-control" name="ordering">
                    </div>
                    <div class="col-md-6  mb-5">
                        <label class="form-label">
                            <p class=" mt-5"><b>Choose avatar</b><span
                                    style="color: #99abb4; font-size: small;">(Expected size:
                                    320x421 pixels, Maximum size: 1024 mb )</span></p>
                        </label>
                        <!-- <form method="post" action="#" id="#">
                            <div class="form-group files">
                                <label>Upload Your File </label>
                                <input type="file" class="form-control" multiple="">
                            </div>
                        </form> -->
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck" name="active">
                                Active?
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <footer>
    <div class="col-md-12 col-12 col-xl-12"  style="background-color: #fff; height: 60px; margin-top:244px;"> 
      <!-- <h4 class="mt-3">© 2021 version 3.0.4 build 2</h4> -->
    </div>
    </footer>
</body>

</html>