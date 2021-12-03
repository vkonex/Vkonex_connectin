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
    <div class="col col-md-5">
      Name
    </div>
    <div class="col">
      description
    </div>
    <div class="col">
      Ordering
      <i class="fas fa-caret-down"></i>
    </div>
    <div class="col">
      Type
    </div>
    <div class="col">
      Created at
    </div>
    <div class="col">
      <br>
    </div>
  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
        <input type="name" style="width:160px;" class="form-control" id="floatingInputGrid" placeholder="Enter Name">
        </div>

        <div class="col" style="margin-right:1010px;">
        <button type="button" class="btn btn-info">Filter</button>
        </div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col col-md-5">
      Grade 12
    </div>
    <div class="col">
      <br>
    </div>
    <div class="col">
      12
    </div>
    <div class="col">
    <button type="button" class="btn btn-success btn-sm">Success</button>
    </div>
    <div class="col">
      jun 18,<br> 2021
    </div>
    <div class="col">
    <i class="fas fa-pen"></i>
    <i class="fas fa-trash"></i>
    </div>
  </div>
</div><br><br>
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
