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
  <title>My Profile</title>
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
  .dot {
  color: #398bf7;
  border-radius: 50%;
  display: inline-block;

}
</style>

<body style="background-color:#dfe6e9" >
  <h3 style="color:#398bf7" class="ms-5"> Profile Update</h3>
  <div class="conatiner mt-5">
    <div class="row">
        
      <div class="col-md-3 col-xl-3 col-12 ms-xl-5 " style="background-color: #fff;  ">
        <p style="font-size:100px;" class="text-center"><span class="dot">&#128512;</span></p>
        <h6 class="text-center">Admin</h6>
        <p style="color: #99abb4;" class="text-center">User</p>
        <p class=" mt-5"><b>Choose avatar</b><span style="color: #99abb4; font-size: small;">(Expected size:
            320x421 pixels, Maximum size: 1024 mb )</span></p>
        <form method="post" action="#" id="#">
          <div class="form-group files">
            <label>Upload Your File </label>
            <input type="file" class="form-control" multiple="">
          </div>
        </form><br>
        <hr>
        <p class="text-left mt-5" style="color: #99abb4; font-size: small;">Email<br><span style="color: black;">N/A</span></p>
        <p class="text-left mt-5" style="color: #99abb4; font-size: small;">Phone<br><span style="color: black;">N/A</span></p>
        <p class="text-left mt-5" style="color: #99abb4; font-size: small;">Address<br><span style="color: black;">N/A</span></p>
      </div>

      <div class="col-md-8 col-xl-8 col-12 ms-md-3  " style="background-color: #fff; height: 500px;">
        <form class="row g-3  mt-5 mb-5">
          <div class="col-md-6">
            <label class="form-label">
              <p>Full name</p>
            </label>
            <input type="text" placeholder="Enter name" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Email</p>
            </label>
            <input type="email" placeholder="Enter email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Phone number</p>
            </label>
            <input type="tel" id="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Enter Phone number"
              class="form-control" id="inputEmail4">
          </div> 
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
    
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <div class="col-md-12 col-12 col-xl-12 mt-5" style="background-color: #fff; height: 60px;">
      <!-- <h4 class="mt-3">© 2021 version 3.0.4 build 2</h4> -->
    </div>
  </footer>
</body>

</html>