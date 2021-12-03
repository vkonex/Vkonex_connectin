<?php
include('server.php')
?>
<?php

 

    $j_title = $_GET['j_title'];
    $Company = $_GET['Company'];
    $work_policy = $_GET['work_policy'];
    $job_location = $_GET['job_location'];
    $emp_type = $_GET['emp_type'];
    $experiance = $_GET['experiance'];
    $Skills = $_GET['Skills'];
    $j_description = $_GET['j_description'];
    $ctc=$_GET['ctc'];
    $username = $_SESSION['username'];


    $user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        $user_id = $user['c_u_id'];

        $sql2 = "SELECT * FROM post_jobs WHERE c_u_id=$user_id AND j_title='$j_title' AND company='$Company'";
        $result2 = mysqli_query($db, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            echo "Already added";
        } else {
            $sql = "INSERT INTO post_jobs (c_u_id,j_title,company,j_workplace_policy,j_location,j_emp_type,j_exp_required,j_skills_required,j_description,CTC) VALUES ($user_id,'$j_title','$Company','$work_policy','$job_location','$emp_type','$experiance','$Skills','$j_description',$ctc)";
            $result = mysqli_query($db, $sql);
            
        }
        header('location:http://65.0.131.51/profile.php');
    } else {
        echo "Failed";
    }

?>



<?php
require_once('dashboard_header.php');
?>

<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->

<head>

  <!--begin::Base Path (base relative path for assets of this page) -->
  <base href="/">
  <!--end::Base Path -->

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="yes" name="apple-mobile-web-app-capable" />
  <!-- <meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keywords | Vkonex-connectin</title>
  <meta name="description" content="Geoconnectin">
  <meta name="csrf-token" content="QiNYCI0Fni60mgD1OEtVVQvXxWXJEF66pqjaCRs3">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <link href="themes/geoconnectin/images/favicon.icon" rel='shortcut icon'>




  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="themes/geoconnectin/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="themes/geoconnectin/assets/css/style.css">
  <link rel="stylesheet" href="themes/geoconnectin/assets/css/custom.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <!-- NO -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="themes/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css" />


  <!-- NO -->
</head>
<!--end:: Head -->

<!--begin:: Body -->


<style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
/* body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
} */
.container{
  margin-top: 30px;
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.35) 1px 2px 5px;
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
 
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input {
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.form-control{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: purple;
   border-radius: 10px;
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: white;
  color:purple;
  border: 2px solid purple;
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  .area{
    width:100%;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}

</style>



<body style="background-color:#fff; color:purple">

<div class="container">
<center><h6 class="title">Hi !</h6>
<h4><?php echo $_SESSION['username']; ?></h4>
    <h3 class="title">Post Your Job</h3>
</center>  
    <div class="content">
      <form>
      <?php include('errors.php'); ?><br>
      

        <div class="user-details">
          <div class="input-box">
            <span class="details">Job Title</span>
            <input name="j_title" type="text" placeholder="Enter your Job Title" required>
          </div>
          <div class="input-box">
            <span class="details">Company</span>
            <input name="Company" type="text" placeholder="Enter your Company name" required>
          </div>

          <div class="input-box">
            <span class="details">Job Location</span>
            <input name="job_location" type="text" placeholder="Enter your Job Location" required>
          </div>

          <div class="input-box">
          <span class="details">Employment type</span>
                             
                             <select required id="select" class="custom-select " name="emp_type" id="inputGroupSelect03">
                                 <option selected>Employment type</option>
                                 <option value="1">Full Time</option>
                                 <option value="2">Part time</option>
                                 <option value="3">Internship</option>
                                 <option value="4">Temporary</option>
                             </select>
                         </div>

          <div class="input-box">
          <span class="details">Workplace policy</span>
            <select required class="custom-select" name="work_policy" id="inputGroupSelect03">
                                <option selected>Workplace policy</option>
                                <option value="1">Remote</option>
                                <option value="2">On Site</option>
                                <option value="3">hybrid</option>
                            </select>
          </div>

          <div class="input-box">
            <span class="details">experience Requied</span>
            <input name="experiance" type="text" placeholder="Enter your ans" required>
          </div>

          <div class="input-box">
            <span class="details">Skills Requied</span>
            <input name="Skills" type="text" placeholder="Enter your skills" required>
          </div>

          <div class="input-box">
            <span class="details">Cost to Company</span>
            <input name="ctc" type="number" placeholder="CTC" required>
          </div>




          <div class="input-box">
          <span class="details">Job description</span>
                                <textarea style="width: 215%;" placeholder="Add Job Description" required style="border: 1px solid #ccc; border-radius:5px; min-height:180px;" aria-label="With textarea" name="j_description" rows="6" cols="0"></textarea>
                              </div>
                        
                              
              </div>
              <div class="jssv1332">
                <div class="search_btn_wrap2">
                  <a class="btn hollow-btn active" href="postjob.php">Clear all</a>
                  <button type="submit" id="swipe_profiles" name="post_job" class="btn  hollow-btn">Post Job</button>
                </div>

        </div>


      </form>
    </div>
  </div>

    
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>


</html>

