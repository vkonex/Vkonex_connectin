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
        /* .container{
           background-color:white;
         }
         section{
           background-color:rgba(228, 241, 254, 1);
         } */
    </style>
  <body>
<section>
    <div class="container" style=" background-color:rgba(228, 241, 254, 1)">
        <div class="row">
      
          <div class="col">
        <input style="width:230px" type="email" class="form-control" id="floatingInputGrid" placeholder="search">
          </div>
          
          <div class="col" style="margin-right:25px;">
          <div class="dropdown">
            <button style="width:210px; height:38px;" class="form-control dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">All</a></li>
              <li><a class="dropdown-item" href="#">Yes</a></li>
              <li><a class="dropdown-item" href="#">No</a></li>
            </ul>
          </div>
        
              </div>

          <div class="col col-md-7">
            <button  type="button" class="btn btn-info">Filter</button>
          </div>
        </div>
      </div>
      
      </div>

    <section class="listpages">
    <div class="container">
  <div class="row">
    <div class="col">
      Tutor name <i class="fas fa-caret-down"></i>
    </div>
    <div class="col">
      Tutor email <i class="fas fa-caret-down"></i>
    </div>
    <div class="col">
      Admin%
    </div>
    <div class="col col-md-3">
    Total amount requested for payment(Incl.Admin commission)

    </div>
    <div class="col col-md-3" style="background:rgba(228, 241, 254, 1); border-radius: 5px; color:black">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tutor earnings  
      <br>
      <div class="container">
        <div class="row" style="border:none;">
        <div class="col">
          Total till date
        </div>
        <div class="col">
          Paid till date
        </div>
        <div class="col">
          Balance due
        </div>
        </div>
      </div>

    </div>
    <div class="col col-md-3" style="background:#D3D3D3; border-radius: 5px; color:black">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Admin earnings
        <br>
        <div class="container">
          <div class="row" style="border:none;">
          <div class="col">
            Total till date
          </div>
          <div class="col">
            Paid till date
          </div>
          <div class="col">
            Balance due
          </div>
          </div>
        </div>
    </div>
    <div class="col">
        Actions
    </div>
  </div>
</div>
</div>
</div>

    </section>



    <section class="listpages">
      <div class="container">
    <div class="row">
      <div class="col">
        Jonas Hump
      </div>
      <div class="col">
        123@<br>gmail.com
      </div>
      <div class="col">
        11%
      </div>
      <div class="col col-md-3">
      444
  
      </div>
      <div class="col col-md-3" style=" border-radius: 5px; color:black">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        <br>
        <div class="container">
          <div class="row" style="border:none;">
          <div class="col">
            1
          </div>
          <div class="col">
            2
          </div>
          <div class="col">
            3
          </div>
          </div>
        </div>
  
      </div>
      <div class="col col-md-3" style=" border-radius: 5px; color:black">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        <br>
        <div class="container">
          <div class="row" style="border:none;">
          <div class="col">
            1
          </div>
          <div class="col">
            2
          </div>
          <div class="col">
            3
          </div>
          </div>
        </div>
  
      </div>
      <div class="col">
        <i class="fas fa-eye"></i>
      </div>
    </div>
  </div>
  </div>
  </div>
  
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
