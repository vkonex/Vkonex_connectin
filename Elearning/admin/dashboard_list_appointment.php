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
  .container{
            padding-top: 10px;
             padding-bottom: 10px;
             border-bottom: 1px solid #D3D3D3;
             width: 100%;
             background-color: white;
         }
         section{
           background-color:rgba(228, 241, 254, 1);
         }
         </style>
  <body>
    <section class="appointment"><br><br><br>

    <!-- first line -->
    <div class="container">
  <div class="row">
    <div class="col">
      Tutor name
    </div>
    <div class="col">
      User name
    </div>
    <div class="col col-md-4">
      Group Class
    </div>
    <div class="col">
      Subject
    </div>
    <div class="col">
      Enroll type
    </div>
    <div class="col">
      Paid
    </div>
    <div class="col">
      start time
    </div>
    <div class="col">
      To time
    </div>
    <div class="col">
      Created at
      <i class="fas fa-sort-down"></i>
    </div>
    <div class="col">
      status
    </div>
    <div class="col">
      <br>
    </div>
  </div>
</div>

<!-- second line -->
<div class="container">
  <div class="row">
  <div class="col">
    <label>
<input type="email"style="width:70px" class="form-control" id="floatingInputGrid" placeholder="Choose subjects" list="browsers" name="myBrowser" /></label>
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
    <label>
<input style="width:70px" type="email" class="form-control" id="floatingInputGrid" placeholder="Choose subjects" list="browsers" name="myBrowser" /></label>
<datalist id="browsers">
  <option value="web-developement">
  <option value="Food & Beverages">
  <option value="Internet Explorer">
  <option value="Opera">
  <option value="Safari">
  <option value="Microsoft Edge">
</datalist>
    </div>

    <div class="col"><br></div>
    <div class="col"><br></div>
    <div class="col"><br></div>
    <div class="col"><br></div>
    <div class="col"><br></div>
    <div class="col"><br></div>
    <div class="col"><br></div>
    <div class="col"><br></div>
    <div class="col"><br></div>

 
    <div class="col">
    
    <input style="padding-left:55px; padding-right:55px; margin-right:5px;" class="form-control" id="floatingInputGrid" type="date" data-role="calendarpicker"
    data-input-format="%d/%m/%y" value="21/12/1972">
    </div>

    <div class="col"><br></div>
    

    <div class="col">
    <div class="dropdown">
  <Button style="width:70px; height:38px;" class="form-control dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></Button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">All</a></li>
    <li><a class="dropdown-item" href="#">Yes</a></li>
    <li><a class="dropdown-item" href="#">No</a></li>
  </ul>
</div>
</div>

<div class="col">
    <button type="button" class="btn btn-info">Filter</button>
</div>  
</div>


<!-- third line -->
<div class="container">
  <div class="row">
    <div class="col">
      brownie <br> singh
    </div>
    <div class="col">
      brown
    </div>
    <div class="col col-md-4">
    PL/SQL" A Full-Real Guide to Make You a Job-Ready PL/SQL Developer &Also covers "Oracle 1Z0-144 and 1Z0-149" PL SQL Exam Topics.
    </div>
    <div class="col">
      web dev
    </div>
    <div class="col">
    <button type="button" class="btn btn-primary btn-sm">1 vs 1</button>
    </div>
    <div class="col">
    <button type="button" class="btn btn-info btn-sm">yes</button>
    </div>
    <div class="col">
      8/19/21<br>8:00AM
    </div>
    <div class="col">
    8/19/21<br>8:00AM
    </div>
    <div class="col">
    8/19/21<br>8:00AM
      
    </div>
    <div class="col">
    <button type="button" class="btn btn-dark btn-sm">Not started</button>
    </div>

    <div class="col">
    <i style="padding-left:20px;"class="fas fa-eye"></i>
    </div>
  </div></div></div><br><br>

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
