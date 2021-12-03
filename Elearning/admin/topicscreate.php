<?php
$error=array();
$db=mysqli_connect('localhost','root','','vkonex_ai');
?>


<?php
if(isset($_POST['submit']))
{

  // input from form
  $name  =mysqli_real_escape_string($db,$_POST['name']);       
  $alias =mysqli_real_escape_string($db,$_POST['alias']);
  $category =mysqli_real_escape_string($db,$_POST['category']);
  $ordering =mysqli_real_escape_string($db,$_POST['ordering']);


      // checking user exist or not
      $user_check="SELECT * FROM create_topic  WHERE name='$name' OR category='$category' LIMIT 1";
      $result=mysqli_query($db,$user_check);
      $user=mysqli_fetch_assoc($result);
      if($user)
      {
            if($user['name']===$name)
            {
              array_push($error,"This user already exist");
            }
            if($user['category']===$category)
            {
              array_push($error,"This email already exist");
            }
      }
      // final registration if no error
      if((count($error) == 0) )
      {

        $query=" INSERT INTO  create_topic (name,alias,category,ordering) VALUES ('$name','$alias', '$category','$ordering')";
        mysqli_query($db,$query);
        header('location:dashboard_filter_topic_listtopic.php');
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
  <title>Topic Create</title>
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
  <h3 style="color:#398bf7" class="ms-5"> Create New Topic</h3>
  <div class="conatiner mt-5">
    <div class="row">
    <?php
      include('../error.php')
      ?> 
      <div class="col-md-11 col-xl-11 col-11 ms-md-5 " style="background-color: #fff;height: 400px;">
        <form class="row g-3  mt-3" method="POST">
          <div class="col-md-6">
            <label class="form-label">
              <p>Name</p>
            </label>
            <input type="text" placeholder="Enter name" class="form-control" name="name" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Alias</p>
            </label>
            <input type="text" placeholder="Enter Alias" class="form-control"  name="alias" >
          </div>

          <div class="col-md-6">
            <label class="form-label">
              <p>Ordering</p>
            </label>
            <input type="text" placeholder="0" class="form-control" name="ordering" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Category(*)</p>
            </label>
            <select id="role" name="category" class="form-select" >
              <option value="user">Dance</option>
              <option value="admin">Photography</option>
              <option value="admin">Teaching</option>
              <option value="admin">Music</option>
              <option value="admin">Yoga</option>
              <option value="admin">fitness</option>
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
    <div class="col-md-12 col-12 col-xl-12" style="background-color: #fff; height: 60px;"> -->
      <!-- <h4 class="mt-3">© 2021 version 3.0.4 build 2</h4> -->
    <!-- </div>
  </footer> -->
</body>

</html>