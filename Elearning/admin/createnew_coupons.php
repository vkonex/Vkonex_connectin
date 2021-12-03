<?php
$error=array();
$db=mysqli_connect('localhost','root','','vkonex_ai');
?>

<?php
if(isset($_POST['submit']))
{

    // input from form
        $name  =mysqli_real_escape_string($db,$_POST['name']);       
        $code =mysqli_real_escape_string($db,$_POST['code']);
        $discount_type  =mysqli_real_escape_string($db,$_POST['discount_type']);
        $target_type =mysqli_real_escape_string($db,$POST['target_type']);
        $discount_value =mysqli_real_escape_string($db, $POST['discount_value']);
        $limit_of_use =mysqli_real_escape_string($db,$_POST['limit_of_use']); 
        $start_date =mysqli_real_escape_string($db,$_POST['start_date']);
        $end_date =mysqli_real_escape_string($db, $_POST['end_date']);


        $user_check="SELECT * FROM create_coupon WHERE name='$name' OR code='$code' LIMIT 1";
      $result=mysqli_query($db,$user_check);
      $user=mysqli_fetch_assoc($result);
      if($user)
      {
            if($user['name']===$name)
            {
              array_push($error,"This user already exist");
            }
            if($user['code']===$code)
            {
              array_push($error,"This code already exist");
            }
      }
      // final registration if no error
      if((count($error) == 0) )
      {

        $query=" INSERT INTO create_coupon (name, code, discount_type, target_type, discount_value, limit_of_use, start_date, end_date) VALUES ('$name', '$code','$discount_type', '$target_type','$discount_value','$limit_of_use','$start_date','$end_date')";
        mysqli_query($db,$query);
        header('location:dashboard_coupen_listcoupen.php');
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
    <linkC href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css "rel="stylesheet">
 
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

<body style=" background-color:rgba(228, 241, 254, 1);" >
  <h3 style="color:black" class="ms-5"> Create New coupon</h3>
  <div class="conatiner">
    <div class="row" style="margin-top:-120px;">
      <div class="col-md-11 col-xl-11 col-11 ms-md-5 " style="background-color: #fff;height: 600px;">
        <form class="row g-3  mt-3 " method="POST">
          <div class="col-md-6">
            <label class="form-label">
              <p>Name</p>
            </label>
            <input name="name" type="text" placeholder="Enter name" class="form-control" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Code</p>
            </label>
            <input name="code" type="text" placeholder="Enter code" class="form-control" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Discount type</p>
            </label>
            <select name="discount_type" id="role"  class="form-select">
              <option value="user">Money</option>
              <option value="admin">Percentage</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Target type</p>
            </label>
            <select name="target_type" id="role"  class="form-select">
              <option value="user">None</option>
              <option value="admin">Group class</option>
              <option value="admin">1 on 1 class</option>
              <option value="admin">Course</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Discount value</p>
            </label>
            <input name="discount_value" type="number" placeholder="0" class="form-control" >
          </div>
          <div class="col-md-6">
            <label class="form-label">
              <p>Limit of use</p>
            </label>
            <input name="limit_of_use" type="number" placeholder="0" class="form-control" >
          </div>
          <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker col-md-6">
            <label for="example">Start date</label>
            <input name="start_date" placeholder="Select date" type="date" id="example" class="form-control">
          </div>
          <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker col-md-6">
            <label for="example">End date</label>
            <input name="end_date" placeholder="Select date" type="date" id="example" class="form-control">
          </div>
          <!-- <div class="col-12">
            <div class="form-check">
              <input name="active" class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Active?
              </label>
            </div>
          </div> -->
          <div class="col-12">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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