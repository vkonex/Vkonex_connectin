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

    <title>Hello, world!</title>
  </head>
  <style>
        *{ 
            color:grey;
        }
        .row{
            padding-top: 10px;
             padding-bottom: 10px;
             border-bottom: 1px solid #D3D3D3;
             width: 100%;
        }
        section{
           background-color:rgba(228, 241, 254, 1);
         }
         .container{
           background-color:white;
         }
    </style>
  <body>
    <section class="listgrades"><br><br><br>
    <div class="container">
  <div class="row">
    <div class="col  col-md-4">
      Name
    </div>
    <div class="col">
      Tutor name
    </div>
    <div class="col">
      categories
    </div>
    <div class="col">
      Maximum strength
    </div>
    <div class="col">
      No of people booked
    </div>
    <div class="col">
      is featured
    </div>
    <div class="col">
      Created at
      <i class="fas fa-caret-down"></i>
    </div>
    <div class="col">
      <br>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
        <input type="name" style="width:390px;" class="form-control" id="floatingInputGrid" placeholder="Enter Name">
        </div>

        <div class="col">
        <input type="name" style="width:110px;" class="form-control" id="floatingInputGrid" placeholder="Enter Name">
        </div>

        <div class="col">
        <input  style="width:100px;" type="email" class="form-control" id="floatingInputGrid" placeholder="Choose subjects" list="browsers" name="myBrowser" /></label>
<datalist id="browsers">
  <option value="web-developement">
  <option value="Food & Beverages">
  <option value="Internet Explorer">
  <option value="Opera">
  <option value="Safari">
  <option value="Microsoft Edge">
</datalist>
        </div>

        <div class="col" style="margin-left:12px;">
        <button type="button" class="btn btn-info">Filter</button>
        </div>

        <div class="col">
          <br>
        </div>
        
        <div class="col">
          <br>
        </div>
        
        <div class="col">
          <br>
        </div>

        <div class="col">
          <br>
        </div>
    </div>
</div>

<div class="container">
<div class="container">
  <div class="row">
    <div class="col  col-md-4">
    Beginner Nikon Digital SLR (DSLR) Photography
    </div>
    <div class="col">
    Mohammad Alhawamdeh
    </div>
    <div class="col">
    Photography 
    </div>

    <div class="col"  style="margin-left:40px;">
      5
    </div>
    <div class="col">
      1
    </div>
    <div class="col">
    <button type="button" class="btn btn-info btn-sm">N</button>
    </div>
    <div class="col">
      Aug 17, 2020
    </div>
    <div class="col">
    <i class="fas fa-pen"></i>
    <i class="fas fa-trash"></i>
    </div>
  </div>
</div>
<br><br>
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
