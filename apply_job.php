<?php
include('server.php')
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
<body>
<?php


require_once('dashboard_header.php');

?>
<div style="background-color: white;">
<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->



    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <br>
          
        <div class="searchCard custom-card">
                <h2>
                  <span><button class="filled-button" style="background:purple; color:white; font-size:14px; border-radius:12px; padding:9px;">Filter Jobs</button></span>
                </h2>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <form action="#">
                 <h5 style="margin-bottom: 15px">Type</h5>
<style>
INPUT[type=checkbox]:focus
{
    outline: 1px solid rgba(0, 0, 0, 0.2);
}

INPUT[type=checkbox]
{
  border: 1px solid gray;
  
    border-radius: 2px;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 17px;
    height: 17px;
    cursor: pointer;
    position: relative;
    top: 5px;
}

INPUT[type=checkbox]:checked
{
    background-color: purple;
    background: purple url("data:image/gif;base64,R0lGODlhCwAKAIABAP////3cnSH5BAEKAAEALAAAAAALAAoAAAIUjH+AC73WHIsw0UCjglraO20PNhYAOw==") 3px 3px no-repeat;
}
</style>
                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Contract (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Full time (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Internship (5)</span>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Category</h5>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Accounting / Finance / Insurance Jobs (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Accounting / Finance / Insurance Jobs (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Accounting / Finance / Insurance Jobs (5)</span>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Career levels</h5>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Entry Level (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Entry Level (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox" class="checkbox">

                           <span>Entry Level (5)</span>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Education levels</h5>

                 <div>
                      <label>
                           <input class="checkbox" type="checkbox">

                           <span>Associate Degree (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input class="checkbox" type="checkbox">

                           <span>Associate Degree (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input class="checkbox" type="checkbox">

                           <span>Associate Degree (5)</span>
                      </label>
                 </div>

                 <br>


                 <h5 style="margin-bottom: 15px">Years of experience</h5>

                 <div>
                      <label>
                           <input class="checkbox" type="checkbox">

                            <span>&lt; 1 (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input class="checkbox" type="checkbox">

                            <span>&lt; 1 (5)</span>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input class="checkbox" type="checkbox">

                            <span>&lt; 1 (5)</span>
                      </label>
                 </div>
            </form>
            
            <br>
          </div>

          <div class="col-lg-8" >
            <div class="row">
         

          <?php 
            $sql = "SELECT * FROM `post_jobs`";
            $result = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($result)){
          ?>

          <div class="col-md-5" style=" color:purple; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; margin:15px; border-radius:7px;">
            <div class="service-item">
              <img src="assets/images/product-6-720x480.jpg" alt="">
              <div class="down-content">
                <h4><?php echo $row['j_title']; ?></h4>
                <div style="margin-bottom:10px;">
                  <span><sup>$</sup> <?php echo $row['CTC']; ?></span>
                </div>

                <p><?php echo $row['company'];?></p>
                <a href="job-details.php?id=<?php echo $row['j_id']; ?>" class="filled-button" style="background:purple; color:white; font-size:11px; border-radius:12px; padding:7px;">View More</a>
              </div>
            </div>

            <br>
          </div>
          <?php } ?>
        </div>
          </div>
        </div>
      </div>
<br><br>
      <div class="jssv1332">
                <div class="search_btn_wrap2">
                  <a class="btn hollow-btn active" href="searchkeyword.php">Clear all</a>
                  <button type="button" id="swipe_profiles" class="btn hollow-btn">Search Job</button>
                </div>
              </div>

              <br><br>
              
              </body>
</html>