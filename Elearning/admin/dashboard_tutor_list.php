<?php
require_once ("index.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <style>
         *{
             background-color: #fff;
         }
         .container{
           
            padding-top: 10px;
             padding-bottom: 10px;
             border-bottom: 1px solid #D3D3D3;
             width: 100%;
             background:white;
         }
         section{
           background-color:rgba(228, 241, 254, 1);
         }

     </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <section>
      <br><br><br>
        <!-- header -->
    <div class="container">
  <div class="row">
  <div class="col-md-2">
      Name
    </div>
    <div class="col-md-1">
      Username
    </div>
    <div class="col-md-3">
      Email
    </div>
    <div class="col" style="margin-left:10px; padding-left:10px">
      Rating
    </div>
    <div class="col" style="margin-left:15px; padding-left:15px">
      Active
    </div>
    <div class="col">
      Email Verified
    </div>
    <div class="col">
      In Home Page
    </div>
    <div class="col">
    Featured
    </div>
    <div class="col">
    Created at
    </div>
    <div class="col">
      Actions
    </div>
  </div>
</div>

<!-- textarea -->
<div class="container">
  <div class="row justify-content-md-left">
  <div class="col-md-3">
  <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
    </div>
    <div class="col-md-3">
    <label>
<input type="email" class="form-control" id="floatingInputGrid" placeholder="Choose subjects" list="browsers" name="myBrowser" /></label>
<datalist id="browsers">
  <option value="web-developement">
  <option value="Food & Beverages">
  <option value="Internet Explorer">
  <option value="Opera">
  <option value="Safari">
  <option value="Microsoft Edge">
</datalist>
    </div>
    <div class="col">
    <div class="dropdown">
  <input style="width:70px; height:38px;" class="form-control dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">All</a></li>
    <li><a class="dropdown-item" href="#">5</a></li>
    <li><a class="dropdown-item" href="#">4</a></li>
    <li><a class="dropdown-item" href="#">3</a></li>
    <li><a class="dropdown-item" href="#">2</a></li>
    <li><a class="dropdown-item" href="#">1</a></li>
  </ul>
</div>
    </div>
    <div class="col-md-5">
    <button type="button" class="btn btn-info">Filter</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
  <div class="col-md-2">
      Brownie
    </div>
    <div class="col-md-1">
      Brown
    </div>
    <div class="col-md-3">
      brownie@gmail.com
    </div>
    <div class="col col-sm-1" style="margin-left:9px; padding-left:10px">
      4
    </div>
    <div class="col col-sm-1">

    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-right:19px;">
    <button type="button" class="btn btn-info btn-sm">Y</button>
    </div>
    <div class="col" style="margin-left:5px;">
    <button type="button" class="btn btn-warning btn-sm">N</button>
    </div>
        

    <div class="col col-sm-1" style="margin-left:5px;">
    <div>17/06/2021</div>
    </div>

    <div class="col" >
    <button type="button"  class="btn btn-primary btn-sm"> Activated</button>
    </div>
  </div>
</div>
<br><br><br>

    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
