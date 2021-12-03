<?php
include('../server.php')
?>
<?php
if(isset($_POST['submit']))
{

    // input from form
        $title =mysqli_real_escape_string($db,$_POST['title']);
        $alias =mysqli_real_escape_string($db,$_POST['alias']);
        $ordering =mysqli_real_escape_string($db,$_POST['ordering']);
        $school_type =mysqli_real_escape_string($db,$_POST['school_type']);

            $query=" INSERT INTO create_grade (title,ordering,alias,school_type) VALUES('$title','$ordering','$alias','$school_type')";
            mysqli_query($db,$query);
            header('location:dashboard_filter_grades_listgrades.php');
        
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

</style>
<body style="background-color:#dfe6e9">
  <h3 style="color:#398bf7" class="ms-5"> Create New Grade</h3>
  <div class="conatiner mt-5">
    <div class="row">
      <div class="col-md-11 col-xl-11 col-11 ms-md-5 " style="background-color: #fff;height: 400px;">
        <form method="POST" class="row g-3  mt-3 ">
          <div class="col-md-6">
            <label class="form-label">
    
              <p>Title</p>
            </label>
            <input type="text" require placeholder="Enter title" class="form-control" name="title" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Alias</p>
            </label>
            <input type="text" require placeholder="Enter Alias" class="form-control"  name="alias">
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Ordering</p>
            </label>
            <input type="text" require placeholder="0" class="form-control" name="ordering" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>School type</p>
            </label>
            <select id="role" require  class="form-select" name="school_type">
              <option value="elementry">Elementary</option>
              <option value="middle school">Middle School</option>
              <option value="high school">High School</option>
              <option value="college">College</option>
            </select>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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