<?php
include_once('header.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<style>
    body{
       background-color:#dfe6e9;
       overflow-x: hidden;
    }
    .dropbtn {
        color: gray;
        padding: 16px;
        font-size: 20px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: fixed;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }


    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

   
    .container-fluid{
        background-color: #fff;
        box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2), 0 4px 15px 0 rgba(0, 0, 0, 0.19);
        height: 70px;

    }
  .cols{
     margin-left:250px;
    }
</style>

<body  class="text-center">
    
<?php
require_once('header.php');
?>
    <div class="conatiner" style="margin-top: -150px;">
        <div class="row">
            
          <div class="col-md-8 col-xl-8 col-10  cols " style="background-color: #fff;  ">
            <img src="people.png" style="width:80px; border-radius:2px;" class="mt-5">
            <h2 class="text-center mt-3">Student Name</h2>
            <hr>
            <div class="row">
           <div class="col-md-4 col-xl-4 col-lg-4 mb-5">
           <h5 class="text-left mt-5" >Name</h5>
           <p >JOHN</p>
            <h5 class="text-left mt-5" >Email</h5>
            <p>john@gmail.com</p>
            <h5 class="text-left mt-5" >Phone Number</h5>
            <p>908765432</p>
            </div>
            <div class="col-md-4 col-xl-4 col-lg-4">
           <h5 class="text-left mt-5" >Submitted Assginement</h5>
           <p>10</p>
            <h5 class="text-left mt-5" >Score</h5>
            <p>N/A</p>
            <h5 class="text-left mt-5" >Attendance</h5>
            <p>N/A</p>
            </div>
            <div class="col-md-4 col-xl-4 col-lg-4">
           <h5 class="text-left mt-5" >Remaining Assginement</h5>
           <p>N/A</p>
            <h5 class="text-left mt-5" >Email</h5>
            <p>N/A</p>
            <h5 class="text-left mt-5" >Email</h5>
            <p>N/A</p>
            </div>
            </div>
         
           
          </div>
  </div>
  </div>
         
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

        <div class="col-md-12 col-12 col-xl-12 mt-5  " style="background-color: #fff; height: 60px;">
            <h6 class="text-center pt-3" style="color: gray;">2021 © Vkonex AI</h5>
          </div>
        </footer>
      
</body>
<footer>
   
</html>