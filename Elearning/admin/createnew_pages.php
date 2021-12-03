
<?php
$error=array();
$db=mysqli_connect('localhost','root','','vkonex_ai');
?>


<?php
if(isset($_POST['submit']))
{

  // input from form
  $title  =mysqli_real_escape_string($db,$_POST['title']);       
  $alias =mysqli_real_escape_string($db,$_POST['alias']);
  $type  =mysqli_real_escape_string($db,$_POST['type']);


      // checking user exist or not
      $user_check="SELECT * FROM create_page  WHERE title='$title' LIMIT 1";
      $result=mysqli_query($db,$user_check);
      $user=mysqli_fetch_assoc($result);
      if($user)
      {
            if($user['title']===$title)
            {
              array_push($error,"This user already exist");
            }

      }
      // final registration if no error
      if((count($error) == 0) )
      {

        $query=" INSERT INTO create_page (title, alias, type ) VALUES ('$title', '$alias','$type')";
        mysqli_query($db,$query);
        header('location:dashboard_filter_grades_listgrades.php');
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
  <title>page Create</title>
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
<body style="background-color:#dfe6e9" >
  <h3 style="color:#398bf7" class="ms-5"> Create New Post</h3>
  <div class="conatiner mt-5">
    <div class="row">
    <?php
      include('../error.php')
      ?> 
      <div class="col-md-11 col-xl-11 col-11 ms-md-5 " style="background-color: #fff;height: 400px;">
        <form class="row g-3  mt-3" method="POST">
          <div class="col-md-6">
            <label class="form-label">
              <p>Title</p>
            </label>
            <input type="text" name="title" placeholder="Enter Title" class="form-control" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Alias</p>
            </label>
            <input type="text" name="alias" placeholder="Enter Alias" class="form-control" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Type</p>
            </label>
            <select name="type" id="role" name="role" class="form-select">
              <option value="user">Static</option>
            </select>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Active?
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- <footer>
    <div class="col-md-12 col-12 col-xl-12" style="background-color: #fff; height: 60px;"> -->
      <!-- <h4 class="mt-3">© 2021 version 3.0.4 build 2</h4> -->
    <!-- </div>
  </footer> -->
</body>

</html>