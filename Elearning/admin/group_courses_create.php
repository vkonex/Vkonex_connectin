
?>
<?php
require_once ("index.php");
?>



<?php
$error=array();
$db=mysqli_connect('localhost','root','','vkonex_ai');
?>


<?php
if(isset($_POST['submit']))
{

  // input from form
  $tutor  =mysqli_real_escape_string($db,$_POST['tutor']);       
  $course_title =mysqli_real_escape_string($db,$_POST['course_title']);
  $price  =mysqli_real_escape_string($db,$_POST['price']);
  $grades  =mysqli_real_escape_string($db,$_POST['grades']);
  $description  =mysqli_real_escape_string($db,$_POST['description']);


      // checking user exist or not
      $user_check="SELECT * FROM create_topic  WHERE tutor='$tutor'  LIMIT 1";
      $result=mysqli_query($db,$user_check);
      $user=mysqli_fetch_assoc($result);
      if($user)
      {
            if($user['tutor']===$tutor)
            {
              array_push($error,"This user already exist");
            }
      }
      // final registration if no error
      if((count($error) == 0) )
      {

        $query=" INSERT INTO create_topic  (tutor,course_title,price,grades,description) VALUES ('$tutor', '$course_title','$price', '$grades', '$description')";
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
    <title>Create New Course</title>
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



    .btns {
        background-color: gray;
        border-color: gray;

    }

    #myFile {
        padding: 50px 0px 50px 35%;
        outline: 2px dashed #92b0b3;
        width: 100%;
    }
</style>

<body style="background-color:#dfe6e9" class="mt-5">
    <h3 style="color:#398bf7" class="ms-5"> Create New Course</h3>
    <div class="conatiner mt-5">
        <div class="row">
        <?php
      include('../error.php')
      ?> 
            <div class="col-md-11 col-xl-11 col-11 ms-5 pt-5 " style="background-color: #fff; ">
                <div class="text-center">
                    <button type="button" class="btn  btn-lg btn-danger btns active">Basic Info</button>
                    <button type="button" class="btn btn-lg btn-danger btns">Course Goals</button>
                    <button type="button" class="btn btn-lg btn-danger btns">Lecture Details</button>
                    <button type="button" class="btn btn-lg btn-danger btns">Coupon</button>
                </div>

                <form method="POST" class="row g-3  mt-5 mb-5">
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1"
                                 checked>
                            <label class="form-check-label" for="inlineCheckbox1">Free</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2"
                                >
                            <label class="form-check-label" for="inlineCheckbox2">Paid</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            <p>Tutor(*)</p>
                        </label>
                        <input type="text" name="tutor" id="tutor" placeholder="Enter Tutor" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            <p> Course Title</p>
                        </label>
                        <input type="text" name="course_title" placeholder="Enter Name" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            <p>Price($)</p>
                        </label>
                        <input type="number" name="price" placeholder="0" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">
                            <p>Grades</p>
                        </label>
                        <select name="grades" class="form-select">
                            <option value="grade 12">grade 12</option>
                            <option value="grade 11">grade 11</option>
                            <option value="grade 10">grade 10</option>
                            <option value="grade 9">grade 9</option>
                            <option value="grade 8">grade 8</option>
                            <option value="grade 7">grade 7</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <p><b>Course introduction video (*)</b><span style="color: #99abb4; font-size: small;">(Maximum
                                size: 1024 mb)</span></p>
                        <form>
                            <input type="file" class="form-control" id="myFile" name="filename">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <p><b>Course main image (*)</b><span style="color: #99abb4; font-size: small;"> (Expected size:
                                320 x 285 pixels, Maximum size: 1024 mb)</span></p>
                        <form>
                            <input type="file" class="form-control" id="myFile" name="filename">
                        </form>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Enter some text here"></textarea>
                    </div>
                    <div class="col-12 mb-5 mt-4">
                        <button name="submit" type="submit" class="btn btn-primary">Next Step</button>
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