<?php

include('server.php')

?>
<?php
session_start();

?>


<!-- Profile Pic-->







<!--INNER JOIN `goals` ON connectin_users.c_u_id = goals.c_u_id

 $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
 
  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");





if(isset($_POST['save'])){

  echo "<pre>",print_r($_POST), "</pre>";
  echo "<pre>",print_r($_FILES), "</pre>";
  echo "<pre>",print_r($_FILES['profileImage']['name']), "</pre>";
  die(); 
 

  
 
}




  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
     // Upload file
     if(move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name)){
        // Insert record
        $query = "insert into connectin_users('avtar') values('".$name."')";
        mysqli_query($con,$query);
     }

INNER JOIN `interests` ON connectin_users.c_u_id = intrests.c_u_id
INNER JOIN `education` ON connectin_users.c_u_id = education.c_u_id
INNER JOIN `work_experiance` ON connectin_users.c_u_id = work_experiance.c_u_id-->

<!-- fetching data query sql-->
<?php

$user = $_SESSION['username'];
$query = "SELECT * FROM `connectin_users` WHERE username= '$user'";
$result = mysqli_query($db, $query);
($row = mysqli_fetch_array($result))
?>
<?php $ID = $row['c_u_id']; ?>
<?php $profilepic = $row['profilepic']; ?>
<?php $Industry = $row['industry']; ?>
<?php $bio = $row['bio']; ?>
<?php $plan = $row['plan']; ?>








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
  <title>My Profile | Vkonex-connectin</title>
  <meta name="description" content="Geoconnectin">
  <meta name="csrf-token" content="QiNYCI0Fni60mgD1OEtVVQvXxWXJEF66pqjaCRs3">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <link href="themes/geoconnectin/images/favicon.icon" rel='shortcut icon'>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/style.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/custom.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://52.66.188.103/themes/geoconnectin/assets/css/style.css">
  <link rel="stylesheet" href="http://52.66.188.103/themes/geoconnectin/assets/css/custom.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->


  <!-- NO -->

  <!-- jQuery 3 -->

  <!--end::Base javascript library -->

  <!-- NO -->
</head>
<!--end:: Head -->

<!--begin:: Body -->
<?php

require_once('dashboard_header.php');

?>
<style>
  .interest-item {
    margin-bottom: 10px;
    color: white;
    background: #850d71;
    cursor: pointer;
    margin: 0 10px 10px 0;
    display: inline-block;
    padding: 8px;
    flex-wrap: nowrap;
    font-size: 13px;
    box-shadow: 0 0 2px 0 rgb(0 0 0 / 10%), 0 2px 5px 0 rgb(0 0 0 / 20%);
    align-items: center;
    font-weight: 400;
    border-radius: 15px;
    flex-direction: row;
    justify-content: center;
    padding: 11.5px 25px;
    font-size: 13px;
    line-height: 1.2;
    border-radius: 1.25rem;
    font-weight: 400;
    text-transform: capitalize;
  }
</style>
<div class="container-fluid">
  <!-- <div class="col-12 header">
                <div class="row">
                    <div class="col col-xs-3 comp_logo">
                      <a class="comp_logo_inn">
                        <img src="http://52.66.188.103/themes/geo/assets/img/AI/foot-logo.png" class="img-fluid logo_login">
                        </a>
                    </div>
                    <div class="col discover">
                        <a aria-current="page" class="nav-link active" href="/dashboard">
                            <i class="fa fa-files-o discover-ico" aria-hidden="true"></i>
                            <div style="position: relative;"><span>Explore</span>
                            <div class="badge suggestions-number again">0</div>
                          </div>
                        </a>
                    </div>
                    <div class="col search">
                      <a aria-current="page" class="nav-link" href="/search">
                        <i class="fa fa-search search-ico" aria-hidden="true"></i>
                        <div style="position: relative;"><span>Search</span>
                        </div>
                      </a>
                    </div>
                    <div class="col profile d-flex justify-content-end pr-0">
                      <ul class="float-right list-inline d-flex mb-0">
                        <li class="nav-item list-inline-item nav-user hide-on-mobile ml-auto mr-0">
                          <a aria-current="page" class="active prof avt_ico" test-id="user-menu-link-to-my-profile" >
                            <div class="jss41">
                              <div class="jss42">
                                <div class="jss43 jss46 uper">Chandra Prakash </div>
                                <div class="jss44 jss47">
                                  <span></span>
                                  <span> </span>
                                </div>
                              </div>
                              <div class="jss45 active jss48">
                                                                <div class="jss49 jss51" style="background-image: url('http://52.66.188.103/assets/images/default-user.jpg');"></div>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>
            </div> -->
</div>
<div class="row">
  <div class="col-12 content">
    <div class="row">
      <!-- start of request friends part -->
      <div class="left_panel left-chat-custom">
        <ul class="nav-menu side-nav__menu">

          <div class="jss246 jss245">
            <div class="jss247 chat-list-custom">
              <button class="MuiButtonBase-root btn jss248" id="Frinlist" type="button" style="margin-left: 10px;">Friends</button>
              <!-- <button class="MuiButtonBase-root btn jss248 jss249 Mui-disabled" tabindex="0" type="button">Say hello</button> -->
              <button class="MuiButtonBase-root btn jss248" id="FrinRequest" type="button">Requests</button>
              <!--<button class="MuiButtonBase-root btn jss248" class="buttonC" id="buttonC" type="button">Chat</button>-->



              <!-- <div id="item" class="item">
                <object type="text/html" data="http://65.0.131.51/chat/users.php" width="2000px" height="800px">
                </object>
              </div> -->





              <div class="text-truncate text-secondary font-weight-bold lstcnt"></div>
            </div>
          </div>










          <div id="friendList" class="friendList">
            <p style="text-align:center;">No friends</p>

          </div>
          <script>
            setInterval(() => {
              let ul = document.getElementById('friendList');
              let formData = new FormData()
              formData.append('user', <?php echo $_SESSION['id']; ?>)
              fetch('get-friends.php', {
                  method: 'POST',
                  body: formData
                }).then(res => res.text())
                .then(data => {
                  ul.innerHTML = data
                })
                .catch(err => console.error(err))
            }, 1000)
          </script>

          <div id="friendRequest" class="friendRequest" style="display:none;">
            <p style="text-align:center;"> No Friend Request Found. </p>
          </div>
          <script>
            let ul = document.getElementById('friendRequest');
            let formData = new FormData()
            formData.append('user', <?php echo $_SESSION['id']; ?>)
            fetch('get-requests.php', {
                method: 'POST',
                body: formData
              }).then(res => res.text())
              .then(data => {
                ul.innerHTML = data
              })
              .catch(err => console.error(err))
          </script>
        </ul>
        <!--  -->
      </div>
      <!-- end of request friends part -->


      <!-- tinder slider -->
      <div class="slider profile__edit_wrap" id="profile-middle">
        <div class="tinder loaded">
          <div class="tinder--status">
            <i class="fa fa-remove"></i>
            <i class="fa fa-heart"></i>
          </div>
          <!-- <div id="go-to-setting" class="list-inline-item hide-on-desktop">
        <button class="MuiButtonBase-root my-svg-btn" tabindex="0" type="button" id="backsetting" style="float: right;">
                  <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107 rotate-btn" style="fill: #850d71">
                      <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
                  </svg>
        </button>



 





      </div> -->















          <div class="tinder--cards">
            <div class="tinder--card profile-intro" style="z-index: 1; transform: scale(1) translateY(0px); opacity: 1; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
              <div class="head_image">
                <div class="overlay" style="background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($profilepic); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
                </div>
                <div class="card-image">
                  <div>
                    <label for="inputFileAvatar" class="profPicWrap select__item_op">
                      <div class="card-image-wrapper settings__icon-edit undefined" id="">
                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($profilepic); ?>" class="user-avatar modal__avatar size-110 pointer">
                        <div class="avatar__edit">
                          <h6 class="avataredit ">

                            <i class="fas fa-pen av_edit">

                            </i>
                          </h6>
                          <h6 class="avatarcross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                        </div>
                    </label>
                    <input id="inputFileAvatar" class="input--invisible" type="file" name="inputFileAvatar" multiple accept="image/*" onchange="upload()">
                  </div>
                </div>
                <div class="user-detail">
                  <div class="user_name_wrap select__item_op select__item_op">
                    <h2 class="edit__fld user-name icon__remove icon--white">


                      <?php echo $_SESSION['username']; ?> </h2>


                    <div class="user_edit_rmv_icon">
                      <h6 class="useredit "><i class="fas fa-pen av_edit"></i></h6>
                      <h6 class="usercross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                    </div>
                  </div>
                  <div class="user_disc_wrap select__item_op">





                    <p class="editdescription user-description settings__icon-edit icon--white">
                      <span><?php echo $row['d_title']; ?> @
                        <?php echo $row['organization']; ?></span><br>
                      <?php echo $row['location']; ?>





                    </p>
                    <div class="user__desc">
                      <h6 class="descedit"><i class="fas fa-pen av_edit"></i></h6>
                      <h6 class="desccross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                    </div>
                  </div>
                </div>
                <div class="location select__item_op"><i class="icon-geo icon-geo-Pin "></i> </div>
              </div>
            </div>

            <?php

            $query = "SELECT * FROM `interests`WHERE c_u_id = $ID ";
            $result = mysqli_query($db, $query);

            ?>


            <div class="head_detail_wrap">
              <div class="edit__fldtag profile-content profile-interest settings__icon-edit select__item_op" id="tag">
                <h2>Interets</h2><br>
                <?php

                while ($row = mysqli_fetch_array($result)) {
                ?>

                  <span class="interest-item"><?php echo $row['interest']; ?></span>

                <?php
                }

                ?>

                <p>
                </p>
                <div class="user__tag">
                  <h6 class="tagedit"><i class="fas fa-pen av_edit"></i>

                  </h6>
                  <a href="delete-interest.php"><i style="position:absolute;left:-50px;top:0;" class="fas fa-trash">

                    </i></a>
                  <h6 class="tagcross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                </div>
              </div>





              <?php

              $query = "SELECT * FROM `goals`WHERE c_u_id = $ID ";
              $result = mysqli_query($db, $query);

              ?>

              <div class="profile-content goal_wrap select__item_op">
                <h2 class="jss165">Current Goals</h2>
                <br>
                <p><span>


                    <?php

                    while ($row = mysqli_fetch_array($result)) {
                    ?>

                      <span class="interest-item"><?php echo $row['goal']; ?></span>

                    <?php
                    }

                    ?>



                </p></b>
                <div class="goals">
                  <div class="user__tag">
                    <h6 class="goaledit"><i class="fas fa-pen av_edit"></i></h6>
                    <a href="delete-goal.php"><i style="position:absolute;left:-50px;top:0;" class="fas fa-trash"></i></a>
                    <h6 class="goalcross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                  </div>
                </div>
              </div>





              <div class="profile-content bio_wrap select__item_op">
                <div class="bio settings__icon--center">

                  <h3 class="jss165"><span>More About Yourself </span></h3><br>


                  <p class="Linkify" style="text-align:center;"><?php echo $bio; ?></p>

                  <div class="user__bio">

                    <h6 class="bioedit"><i class="fa fa-plus av_edit"></i></h6>
                    <h6 class="biocross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                  </div>
                </div>
              </div>



              <div class="profile-content profile-details">
                <div class="experience settings__icon--wrap">

                  <?php

                  $query = "SELECT * FROM `connectin_users` WHERE c_u_id=$ID";
                  $result = mysqli_query($db, $query);

                  ?>



                  <div class="jss167">



                    <h3 class="jss165"> <svg width="1em" height="1em" viewBox="0 0 16 15" class="jss164" style="fill: #850d71">
                        <defs>
                          <path id="note_svg__a" d="M0 .616h15.662V15H0z"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                          <g transform="translate(0 -.616)">
                            <mask id="note_svg__b" fill="#fff">
                              <use xlink:href="#note_svg__a"></use>
                            </mask>
                            <path fill="#850d71" d="M14.557 13.027a.999.999 0 0 1-.998.999H2.104a.999.999 0 0 1-1-1V3.16a1 1 0 0 1 1-1h2.41v1.204a.487.487 0 0 0 .973 0V2.16h5.252v1.203a.486.486 0 1 0 .971 0V2.16h1.848c.553 0 1 .447 1 .999v9.867zM13.38 1.187h-1.67v-.085a.486.486 0 1 0-.97 0v.085H5.486v-.085a.486.486 0 1 0-.973 0v.085H2.281A2.282 2.282 0 0 0 0 3.467v9.25a2.283 2.283 0 0 0 2.283 2.284H13.38a2.282 2.282 0 0 0 2.281-2.283v-9.25a2.281 2.281 0 0 0-2.28-2.281z" mask="url(#note_svg__b)"></path>
                          </g>
                          <path fill="#850d71" d="M12.078 6.074H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24m0 2.486H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24m0 2.562H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24"></path>
                        </g>
                      </svg><span style="text-align:center;">Experience</span></h3>



                    <?php

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <p><B><?php
                          
                            date_default_timezone_set('Asia/Kolkata');
                            $data = date("Y-m-d");
                           
                            $date1 = strtotime($row['experience']);
                            $date2 = strtotime($data);

                            $diff = abs($date2 - $date1);

                            $years = floor($diff / (365 * 60 * 60 * 24));
                            $months = floor(($diff - $years * 365 * 60 * 60 * 24)
                              / (30 * 60 * 60 * 24));
                            $days = floor(($diff - $years * 365 * 60 * 60 * 24 -
                              $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

                            // Print the result
                            printf(
                              "%d years, %d months, %d days",
                              $years,
                              $months,
                              $days,

                            );

                            ?></B></p>
                      </br>

                    <?php
                    }

                    ?>
                  </div>

                  <div class="user__experience">
                    <h6 class="experienceedit"><i class="fa fa-plus av_edit"></i></h6>
                    <h6 class="experiencecross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                  </div>
                </div>
              </div>


              <!-- Privious experiance -->
              <div class="profile-content profile-details">
                <div class="education settings__icon--wrap">




                  <?php

                  $query = "SELECT * FROM `privious_experiance`WHERE c_u_id = $ID ";
                  $result = mysqli_query($db, $query);

                  ?>
                  <div class="jss167">
                    <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164" style="fill: #850d71">
                        <path d="M5.824 16.944v4.784c.16 3.808 4.64 6.88 10.176 6.88s10.016-3.056 10.16-6.88v-4.8L16 23.04z"></path>
                        <path d="M16 2.72L0 11.424l16 8.704 13.088-7.12V23.04H32V11.424L16 2.72z"></path>
                      </svg><span>Privious Experience</span></h3>

                    <?php

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <a href="delete-pexp.php?id=<?php echo $row['p_e_id']; ?>"><i style="position:absolute;right:0;" class="fas fa-trash"></i></a>
                      <span><b>Position -</b> <?php echo $row['Position']; ?> <br>
                        <b>Organization -</b> <?php echo $row['Organisation']; ?>
                        <!--<br>
                        <b>Duartion - </b><?php echo $row['duratiom']; ?>-->
                      </span><br>
                      <hr>
                    <?php
                    }

                    ?>
                  </div>

                  <div class="user__education">

                    <h6 class="exp_edit"><i class="fa fa-plus av_edit"></i></h6>
                    <h6 class="exp_cross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                  </div>
                </div>
              </div>
              <!-- Profile Education End -->

              <div class="profile-content profile-details">
                <div class="industry settings__icon--wrap">


                  <div class="jss167">

                    <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164" style="fill: #850d71">
                        <path d="M31.4 11.6c-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.8v-2.7c0-.5-.2-.9-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.5 3.7v-2.7c0-.4-.2-.8-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.2v2.8l5.7-2.9v2.8c0 .5.2.9.6 1.1.2.1.4.2.6.2s.4-.1.6-.2l6.5-3.7v2.7c0 .7.6 1.3 1.3 1.3.2 0 .4-.1.6-.2l6.4-3.8V26c0 .1-.1.3-.3.3h-22v2.6h22.1c1.5 0 2.7-1.2 2.7-2.8V12.6c-.1-.4-.3-.8-.7-1zM8.9 5.9c2.3.4 3.4.5 4.4.1 2.3-1 1.8-3.4 1.3-2.9-1.1.9-2.5 1.5-4.1 1.5-.6 0-1.1-.1-1.6-.2C7 4 6.4 5 6.4 5c-.4.5.2 1.1.7 1.1.4-.1.9-.2 1.4-.2h.4c.1 0 0 0 0 0zM2.9 5.1h-.1C1.4 5.1.3 6.2.3 7.6L0 27.3v.1c0 .8.7 1.5 1.5 1.5h4.2L5.5 7.6c-.1-1.4-1.2-2.5-2.6-2.5z"></path>
                        <path d="M24.7 20.1h1.6c.5 0 1 .4 1 1v1.6c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.6c0-.6.5-1 1-1zM9.6 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1H9.6c-.5 0-1-.4-1-1v-1.7c0-.6.5-1 1-1zM17.2 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.7c0-.6.4-1 1-1z"></path>
                      </svg><span style="text-align:center;">Industry</span></h3>

                    <span id="industry_profile_data">
                      <?php echo $Industry; ?>
                    </span>
                  </div>

                  <div class="user__industry">

                    <h6 class="industryedit"><i class="fa fa-plus av_edit"></i></h6>
                    <h6 class="industrycross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                  </div>
                </div>
              </div>




              <!-- <div class="profile-content profile-details">
                      <div class="previous settings__icon--wrap">
                        <button class="MuiButtonBase-root jss162" tabindex="0" type="button">
                            <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                <path
                                    d="M27.088 8.736a.324.324 0 0 0 0-.114v.002a.772.772 0 0 0-.192-.352l-8-8a.77.77 0 0 0-.347-.191L18.544.08H5.536a.8.8 0 0 0-.8.8v30.4a.8.8 0 0 0 .8.8h20.8a.8.8 0 0 0 .8-.8V8.832a.23.23 0 0 0-.048-.096zM24.384 8H19.2V2.768zM25.6 30.4H6.4V1.6h11.2v7.2a.8.8 0 0 0 .8.8h7.2z"
                                ></path>
                                <path d="M16.544 24.8h7.2v1.6h-7.2v-1.6zM8.544 13.6h15.2v1.6h-15.2v-1.6zM8.544 16.8h15.2v1.6h-15.2v-1.6zM8.544 20h15.2v1.6h-15.2V20z"></path>
                            </svg>
                            <div class="jss167">
                                <h3 class="jss165"><span>Previous Organization</span></h3>
                                <span>Add your previous experiences</span>
                            </div>
                        </button>
                        <div class="user__previous">
                            <h6 class="previousedit"><i class="fas fa-pen av_edit"></i></h6>
                            <h6 class="previouscross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                            <h6 class="previousadd" style="display: none;"><i class="fa fa-plus av_add" aria-hidden="true"></i></h6>
                        </div>
                      </div>
                    </div> -->



              <!-- Profile Education -->
              <div class="profile-content profile-details">
                <div class="education settings__icon--wrap">




                  <?php

                  $query = "SELECT * FROM `education`WHERE c_u_id = $ID ";
                  $result = mysqli_query($db, $query);

                  ?>
                  <div class="jss167">
                    <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164" style="fill: #850d71">
                        <path d="M5.824 16.944v4.784c.16 3.808 4.64 6.88 10.176 6.88s10.016-3.056 10.16-6.88v-4.8L16 23.04z"></path>
                        <path d="M16 2.72L0 11.424l16 8.704 13.088-7.12V23.04H32V11.424L16 2.72z"></path>
                      </svg><span>Education</span></h3>

                    <?php

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <a href="delete-education.php?id=<?php echo $row['E_id']; ?>"><i style="position:absolute;right:0;" class="fas fa-trash"></i></a>
                      <span><?php echo $row['school']; ?> <br>
                        <?php echo $row['degree']; ?>
                      </span><br>
                      <hr>
                    <?php
                    }

                    ?>
                  </div>

                  <div class="user__education">

                    <h6 class="educationedit"><i class="fa fa-plus av_edit"></i></h6>
                    <h6 class="educationcross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                  </div>
                </div>
              </div>
              <!-- Profile Education End -->





              <div class="profile-content profile-details">
                <!-- <div class="social__media-wrap settings__icon--wrap select__item_op" id="linkdclass">
                        <div class="profile-wrapper-url settings__icon-create settings__icon--center">
                          <a class="icon linkedin-icon" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-linkedin linkedin-icon" aria-hidden="true"></i>
                          </a>
                          <p class="profile-wrapper-url__txt"><span>Add Linkedin Profile</span></p>
                        </div>
                        <div class="user__previous">
                            <h6 class="linkededit"><i class="fas fa-pen av_edit"></i></h6>
                            <h6 class="linkedcross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                            <h6 class="linkedadd" style="display: none;"><i class="fa fa-plus av_add" aria-hidden="true"></i></h6>
                        </div>
                      </div>
                      
                      <div class="social__media-wrap settings__icon--wrap select__item_op" id="webclass">
                        <div class="profile-wrapper-url settings__icon-create settings__icon--center">
                          <a class="icon weblink-icon" target="_blank" rel="noopener noreferrer">
                            <svg id="Layer_1" class="weblink-icon" enable-background="new 0 0 496.002 496.002" height="28" viewBox="0 0 496.002 496.002" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m480.001 319.999c-4.531 0-460.021 0-464 0-8.837 0-16 7.163-16 16s7.163 16 16 16h6.806c39.593 85.714 126.103 144.003 225.209 144.003 99.128 0 185.616-58.354 225.178-144.002h6.806c8.837 0 16-7.163 16-16s-7.162-16.001-15.999-16.001zm-322.062 32h74.062v97.398c-32.174-25.347-56.985-57.958-74.062-97.398zm106.062 97.398v-97.398h74.062c-17.079 39.44-41.889 72.05-74.062 97.398zm-205.399-97.398h64.806c15.62 40.608 38.829 75.987 68.486 104.673-56.468-15.064-104.742-52.533-133.292-104.673zm245.505 104.674c29.656-28.686 52.866-64.065 68.487-104.673h64.806c-28.55 52.14-76.825 89.608-133.293 104.673zm-288.106-280.674h464c8.837 0 16-7.163 16-16s-7.163-16-16-16h-6.806c-64.882-140.457-239.751-186.451-364.955-100.895-37.278 25.473-66.637 60.203-85.434 100.895h-6.806c-8.837 0-16 7.163-16 16s7.164 16 16.001 16zm322.856-32h-74.856v-96.243c21.783 18.323 53.427 50.468 74.856 96.243zm-106.856-96.243v96.244h-74.857c21.43-45.776 53.074-77.921 74.857-96.244zm205.398 96.243h-63.639c-18.911-46.487-47.9-81.681-72.36-105.369 57.629 14.578 106.995 52.399 135.999 105.369zm-242.797-105.369c-24.46 23.688-53.449 58.883-72.361 105.369h-63.639c29.005-52.97 78.37-90.791 136-105.369zm-38.319 157.953c8.515 2.365 13.499 11.184 11.134 19.698l-20 72c-3.393 12.219-19.043 15.822-27.43 6.285l-15.986-18.175-15.986 18.175c-8.366 9.514-24.03 5.961-27.43-6.285l-20-72c-2.365-8.514 2.619-17.333 11.134-19.698 8.514-2.366 17.334 2.62 19.698 11.134l12.09 43.523c8.244-9.372 11.609-15.074 20.494-15.074s12.226 5.674 20.494 15.074l12.09-43.523c2.364-8.514 11.184-13.498 19.698-11.134zm288 0c8.515 2.365 13.499 11.184 11.134 19.698l-20 72c-3.393 12.219-19.043 15.822-27.43 6.285l-15.986-18.175-15.986 18.175c-8.397 9.547-24.042 5.917-27.43-6.285l-20-72c-2.365-8.514 2.619-17.333 11.134-19.698 8.512-2.366 17.334 2.62 19.698 11.134l12.09 43.523c8.244-9.372 11.609-15.074 20.494-15.074s12.226 5.674 20.494 15.074l12.09-43.523c2.365-8.514 11.186-13.498 19.698-11.134zm-144 0c8.515 2.365 13.499 11.184 11.134 19.698l-20 72c-3.393 12.219-19.043 15.822-27.43 6.285l-15.986-18.175-15.986 18.175c-8.366 9.514-24.03 5.961-27.43-6.285l-20-72c-2.365-8.514 2.619-17.333 11.134-19.698 8.513-2.366 17.334 2.62 19.698 11.134l12.09 43.523c8.244-9.372 11.609-15.074 20.494-15.074s12.226 5.674 20.494 15.074l12.09-43.523c2.365-8.514 11.188-13.498 19.698-11.134z"/></svg>
                          </a>
                          <p class="profile-wrapper-url__txt"><span>Add Website Link</span></p>
                        </div>
                        <div class="user__previous">
                            <h6 class="websiteedit"><i class="fas fa-pen av_edit"></i></h6>
                            <h6 class="websitecross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                            <h6 class="websiteadd" style="display: none;"><i class="fa fa-plus av_add" aria-hidden="true"></i></h6>
                        </div>
                      </div> -->

                <!-- <div class="social__media-wrap settings__icon--wrap select__item_op">
                        <div class="profile-wrapper-url settings__icon-create settings__icon--center">
                          <a class="icon twitter-icon" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-twitter twitter-icon" aria-hidden="true"></i>
                          </a>
                          <p class="profile-wrapper-url__txt"><span>Add Twitter Profile</span></p>
                        </div>
                        <div class="user__previous">
                            <h6 class="twitteredit"><i class="fas fa-pen av_edit"></i></h6>
                            <h6 class="twittercross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                            <h6 class="twitteradd" style="display: none;"><i class="fa fa-plus av_add" aria-hidden="true"></i></h6>
                        </div>
                      </div>
                      
                      <div class="social__media-wrap settings__icon--wrap select__item_op">
                        <div class="profile-wrapper-url settings__icon-create settings__icon--center">
                          <a class="icon insta-icon" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-instagram insta-icon" aria-hidden="true"></i>
                          </a>
                          <p class="profile-wrapper-url__txt"><span>Add Instagram Profile</span></p>
                        </div>
                        <div class="user__previous">
                            <h6 class="instagramedit"><i class="fas fa-pen av_edit"></i></h6>
                            <h6 class="instagramcross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                            <h6 class="instagramadd" style="display: none;"><i class="fa fa-plus av_add" aria-hidden="true"></i></h6>
                        </div>
                      </div>  -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /tinder slider -->

    <div class="right_panel" id="mobile-set">
      <div class="jss37 my_skills">


        <div id="interests" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backsetting">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107" style="fill: #850d71">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form id="interest_form" name="frm_my_goal" class="jss264">
            <input type="hidden" name="selected_goals" value="" />
            <input type="hidden" name="removed_goals" value="" />
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>My Interests</span></h2>
            <div id="my_goal_message" class="sbmt__msg"></div>
            <div class="jss269">
              <div class="settings__item__block">
                <div class="settings__goals-wrapper">
                  <i class="fa fa-briefcase icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="1"><span>Data Science</span></div>
                    <div class="settings__goal" data-id="2"><span>Computer Science</span></div>
                    <div class="settings__goal" data-id="3"><span>Digital Marketing</span></div>
                  </div>
                </div>

                <div class="settings__goals-wrapper">
                  <i class="fas fa-pen-square-o icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="7"><span>Research</span></div>
                    <div class="settings__goal" data-id="8"><span>Information Technology</span></div>
                  </div>
                </div>
                <div class="settings__goals-wrapper">
                  <i class="fa fa-snowflake-o icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="9"><span>Cycling</span></div>
                    <div class="settings__goal" data-id="10"><span>Biking</span></div>
                    <div class="settings__goal" data-id="11"><span>Cricket</span></div>
                  </div>
                </div>
                <div class="settings__goals-wrapper">
                  <i class="fa fa-lightbulb-o icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="12"><span>Gym</span></div>
                    <div class="settings__goal" data-id="13"><span>Swimming</span></div>
                  </div>
                </div>
              </div>
              <div class="settings__meta w-100">
                <p class="settings__meta-item"><span id="my_goals_count">0/3</span></p>
              </div>
            </div>

            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelgoal" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="bio" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backbio">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form action="profile-change-bio.php" class="jss264">
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>My Bio</span></h2>
            <div id="mybioMessage" class="sbmt__msg"></div>
            <div class="jss269">
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt profile_mybio">
                    <textarea id="about_me" cols="4" rows="4" name="bio" class="jss281" style="height: 150px;overflow: hidden;" onKeyDown="limitText(this.form.about_me,this.form.countdown,250);" onKeyUp="limitText(this.form.about_me,this.form.countdown,250);"></textarea>
                  </div>
                </div>
                <span class="cnt"></span><span class="cnthide">0</span><span>/250</span><span id="myf" class="error" style="margin-top: -21px;"></span>
              </div>
            </div>
            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelbio" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="experience" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backexperience">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form id="frm_my_experience" class="jss264">

            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>Work Experience</span></h2>
            <div id="mydateMessage" class="sbmt__msg"></div>
            <div class="jss542">
              <p class="MuiTypography-root MuiTypography-body1"><span>I'm a student</span></p>
              <label class="switch__pro">
                <input type="checkbox" name="is_student" id="is_student" />
                <span id="slider_student" class="slider round"></span>
              </label>
            </div>
            <p class="MuiTypography-root MuiTypography-body1">When did you start your career?</p>
            <div class="MuiFormControl-root MuiTextField-root jss543" format="MMMM yyyy">
              <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-formControl MuiInput-formControl">
                <!-- <input class="MuiInputBase-input MuiInput-input" id="date" name="date" type="month" placeholder="Date" value="MM-YY"> -->
                <input class="MuiInputBase-input MuiInput-input" id="date" name="date" type="date" value=" ">
              </div>
              <p class="MuiFormHelperText-root MuiFormHelperText-filled">Year and month</p>
            </div>

            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelexperience" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="education" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backeducation">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>



          <div class="jss821">
            <h2 class="MuiTypography-root jss706 jss707 MuiTypography-h2"><span>Education</span></h2>

            <button class="MuiButtonBase-root jss822" tabindex="0" type="button" id='btn_add_education'>
              <svg width="1em" height="1em" viewBox="0 0 32 32">
                <path d="M30.8 14.8H17.2V1.2A1.2 1.2 0 0 0 16 0a1.217 1.217 0 0 0-1.2 1.199V14.8H1.2A1.217 1.217 0 0 0 0 15.999V16a1.2 1.2 0 0 0 1.2 1.2h13.6v13.6A1.2 1.2 0 0 0 16 32h.016c.654 0 1.184-.53 1.184-1.184v-.017.001-13.6h13.616c.654 0 1.184-.53 1.184-1.184v-.017V16a1.2 1.2 0 0 0-1.2-1.2z"></path>
              </svg>
            </button>
          </div>

          <div id="education_list">
          </div>

          <!-- Add Education -->
          <form action="profile-add-education.php" id="frm_add_education" style="display: none;">

            <div id="msg_education_update" class="sbmt__msg"></div>

            <input type="hidden" id="frm_add_education_id" name="frm_add_education_id">

            <div class="jss269 jss264 mb-0">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>School</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="frm_add_education_school" name="school" name="" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>

            <div class="jss269 jss264">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Degree(s)</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="frm_add_education_degree" name="degree" name="" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>

            <div class="jss1337 jss264 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="btn_add_education_cancel" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button id="btn_add_education_submit" class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
          <!-- Add Education End -->
          </form>
        </div>

        <div id="prvious_exp" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backprvious_exp">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>



          <div class="jss821">
            <h2 class="MuiTypography-root jss706 jss707 MuiTypography-h2"><span>Previous Experiance</span></h2>

            <button class="MuiButtonBase-root jss822" tabindex="0" type="button" id='btn_add_prvious_exp'>
              <svg width="1em" height="1em" viewBox="0 0 32 32">
                <path d="M30.8 14.8H17.2V1.2A1.2 1.2 0 0 0 16 0a1.217 1.217 0 0 0-1.2 1.199V14.8H1.2A1.217 1.217 0 0 0 0 15.999V16a1.2 1.2 0 0 0 1.2 1.2h13.6v13.6A1.2 1.2 0 0 0 16 32h.016c.654 0 1.184-.53 1.184-1.184v-.017.001-13.6h13.616c.654 0 1.184-.53 1.184-1.184v-.017V16a1.2 1.2 0 0 0-1.2-1.2z"></path>
              </svg>
            </button>
          </div>

          <div id="prvious_exp_list">
          </div>

          <!-- Add prvious experiance -->
          <form action="profile-add-privious-experiance.php" id="frm_add_prvious_exp" style="display: none;">

            <div id="msg_education_update" class="sbmt__msg"></div>

            <input type="hidden" id="frm_add_education_id" name="frm_add_education_id">

            <div class="jss269 jss264 mb-0">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>position</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="frm_add_prvious_exp_position" name="position" name="" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>

            <div class="jss269 jss264">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Organization</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="frm_add_prvious_exp_organization" name="organization" name="" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>

            <!--<div class="jss269 jss264">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Duration</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="frm_add_prvious_exp_organization" name="duration" name="" test-id="input-undefined" value="">
                  </div>

                </div>
              </div>
            </div>-->

            <div class="jss1337 jss264 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="btn_add_prvious_exp_cancel" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button id="btn_add_prvious_exp_submit" class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
          <!-- Add privious End -->
          </form>
        </div>

        <div id="previous" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backprevious">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form name="frm_my_previous" class="jss2645">
            <div id="mybioMessage" class="sbmt__msg"></div>
            <div class="jss821">
              <h2 class="MuiTypography-root jss706 jss707 MuiTypography-h2"><span>Previously</span></h2>
              <button class="MuiButtonBase-root jss822" tabindex="0" type="button">
                <svg width="1em" height="1em" viewBox="0 0 32 32">
                  <path d="M30.8 14.8H17.2V1.2A1.2 1.2 0 0 0 16 0a1.217 1.217 0 0 0-1.2 1.199V14.8H1.2A1.217 1.217 0 0 0 0 15.999V16a1.2 1.2 0 0 0 1.2 1.2h13.6v13.6A1.2 1.2 0 0 0 16 32h.016c.654 0 1.184-.53 1.184-1.184v-.017.001-13.6h13.616c.654 0 1.184-.53 1.184-1.184v-.017V16a1.2 1.2 0 0 0-1.2-1.2z"></path>
                </svg>
              </button>
            </div>
            <div class="jss823">
              <div class="jss824">
                <div class="jss825">
                  <button class="MuiButtonBase-root jss826 jss827" tabindex="0" type="button">
                    <svg width="1em" height="1em" viewBox="0 0 32 32">
                      <path d="M31.632 22.512a1.15 1.15 0 0 1 .001 1.695l-.001.001a1.264 1.264 0 0 1-1.745 0h.001L16 10.752 2.112 24.208a1.26 1.26 0 0 1-1.744 0 1.15 1.15 0 0 1-.001-1.695l.001-.001L16 7.36z"></path>
                    </svg>
                  </button>
                  <button class="MuiButtonBase-root jss826" tabindex="0" type="button">
                    <svg width="1em" height="1em" viewBox="0 0 32 32">
                      <path d="M.368 9.488a1.15 1.15 0 0 1-.001-1.695l.001-.001a1.264 1.264 0 0 1 1.745 0h-.001L16 21.248 29.888 7.792a1.26 1.26 0 0 1 1.744 0 1.15 1.15 0 0 1 .001 1.695l-.001.001L16 24.64z"></path>
                    </svg>
                  </button>
                </div>
                <div class="jss830">
                  <p class="MuiTypography-root jss831 MuiTypography-body1">Omnitech Ltd</p>
                  <p class="MuiTypography-root jss832 MuiTypography-body1">UI/UX Engineer</p>
                </div>
                <button class="MuiButtonBase-root jss833" tabindex="0" type="button">
                  <svg width="1em" height="1em" viewBox="0 0 32 32">
                    <path d="M7.36 26.56l-1.92-1.92L23.52 6.72l-1.76-1.76L3.52 23.04 0 32l8.8-3.36 18.4-18.4-1.76-1.6zM31.36 2.72L29.28.64a2.38 2.38 0 0 0-3.52.16l-2.24 2.24 5.44 5.44 2.24-2.24c.96-1.12 1.12-2.56.16-3.52z"></path>
                  </svg>
                </button>
                <button class="MuiButtonBase-root jss833" tabindex="0" type="button">
                  <svg width="1em" height="1em" viewBox="0 0 32 32">
                    <path d="M31.632.368a1.247 1.247 0 0 0-1.76 0L16 14.24 2.128.368a1.247 1.247 0 0 0-1.76 0 1.23 1.23 0 0 0 0 1.744L14.24 16 .368 29.872a1.247 1.247 0 0 0 0 1.76 1.247 1.247 0 0 0 1.76 0L16 17.744l13.872 13.888a1.247 1.247 0 0 0 1.76 0 1.247 1.247 0 0 0 0-1.76L17.76 16 31.632 2.112a1.23 1.23 0 0 0 0-1.744z"></path>
                  </svg>
                </button>
              </div>
            </div>
            <div class="jss269 jss264 mb-0">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>First name</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="" name="first_name" test-id="" value="" placeholder="First Name">
                  </div>
                </div>
              </div>
            </div>
            <div class="jss269 jss264">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Last name</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="" name="" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="jss1337 jss264 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelprevious" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="linked" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backlinked">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form name="frm_my_linked" class="jss2645">
            <div id="mylinkedinMessage" class="sbmt__msg jss264 mb-0"></div>
            <!-- linked in -->
            <div class="social__media-profile">
              <h2 class="MuiTypography-root jss706 jss707 MuiTypography-h2 pb-0 mb-0"><span>Linkedin</span></h2>
              <div class="jss269 jss264 mb-0">
                <div class="jss271">
                  <div class="jss272 profile__wrap">
                    <div class="jss277 profile__edt">
                      <input class="jss281" type="text" id="linkedin_url" name="linkedin_url" test-id="input-undefined" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="jss1337 jss264 profile__btn_wrap">
                <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancellinked" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
                </button>
                <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
                </button>
              </div>
            </div>
          </form>
        </div>


        <div id="website" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backwebsite">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form name="frm_my_website" class="jss2645">
            <div id="mywebMessage" class="sbmt__msg jss264 mb-0"></div>
            <!-- Website -->
            <div class="social__media-profile">
              <h2 class="MuiTypography-root jss706 jss707 MuiTypography-h2 pb-0 mb-0"><span>Website</span></h2>
              <div class="jss269 jss264 mb-0">
                <div class="jss271">
                  <div class="jss272 profile__wrap">
                    <div class="jss277 profile__edt">
                      <input class="jss281" type="text" id="web_url" name="web_url" test-id="input-undefined" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="jss1337 jss264 profile__btn_wrap">
                <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelwebsite" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
                </button>
                <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
                </button>
              </div>
            </div>
          </form>
        </div>


        <div id="twitter" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backtwitter">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form name="frm_my_twitter" class="jss2645">
            <!-- Twitter -->
            <div class="social__media-profile">
              <h2 class="MuiTypography-root jss706 jss707 MuiTypography-h2 pb-0 mb-0"><span>Twitter</span></h2>
              <div class="jss269 jss264 mb-0">
                <div class="jss271">
                  <div class="jss272 profile__wrap">
                    <div class="jss277 profile__edt">
                      <input class="jss281" type="text" id="" name="" test-id="input-undefined" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="jss1337 jss264 profile__btn_wrap">
                <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="canceltwitter" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
                </button>
                <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
                </button>
              </div>
            </div>
          </form>
        </div>


        <div id="instagram" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backinstagram">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>
          <form name="frm_my_instagram" class="jss2645">
            <!-- Instagram -->
            <div class="social__media-profile">
              <h2 class="MuiTypography-root jss706 jss707 MuiTypography-h2 pb-0 mb-0"><span>Instagram</span></h2>
              <div class="jss269 jss264 mb-0">
                <div class="jss271">
                  <div class="jss272 profile__wrap">
                    <div class="jss277 profile__edt">
                      <input class="jss281" type="text" id="" name="" test-id="input-undefined" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="jss1337 jss264 profile__btn_wrap">
                <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelinstagram" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
                </button>
                <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
                </button>
              </div>
            </div>
          </form>
        </div>


        <div id="industry" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backindustry">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form id="industry_form" name="frm_my_industry" class="">
            <h2 class="MuiTypography-root jss267 MuiTypography-h2 jss264 mb-0"><span>Work Industry</span></h2>

            <div id="msg_industry" class="sbmt__msg"></div>

            <!-- search input -->
            <div class="settings__wrapper jss264 pt-0 mb-0">
              <input type="text" class="form-control form-control-lg" placeholder="Search industry" value="" id="search_industry_input" onkeyup="searchIndustry()">
              <i class="icon-shapr icon-shapr-Search settings__input-btn"></i>
            </div>

            <div class="settings__header settings__header--white settings__header--padding base-bg1">
              <!-- search list -->
              <div class="search_list__wrap" id="industry_list_wrap">
                <div data-text="Accounting">
                  <div class="list__item industry_content_div" data-id="1" data-name="Accounting">
                    <div class="industry_first_letter">
                      A </div>
                    <spam type="submit">Accounting</spam>
                  </div>
                </div>
                <div data-text="Airlines/Aviation">
                  <div class="list__item industry_content_div" data-id="2" data-name="Airlines/Aviation">
                    <div class="industry_first_letter">
                    </div>Airlines/Aviation
                  </div>
                </div>
                <div data-text="Alternative Dispute Resolution">
                  <div class="list__item industry_content_div" data-id="3" data-name="Alternative Dispute Resolution">
                    <div class="industry_first_letter">
                    </div>Alternative Dispute Resolution
                  </div>
                </div>
                <div data-text="Alternative Medicine">
                  <div class="list__item industry_content_div" data-id="4" data-name="Alternative Medicine">
                    <div class="industry_first_letter">
                    </div>Alternative Medicine
                  </div>
                </div>
                <div data-text="Animation">
                  <div class="list__item industry_content_div" data-id="5" data-name="Animation">
                    <div class="industry_first_letter">
                    </div>Animation
                  </div>
                </div>
                <div data-text="Apparel &amp; Fashion">
                  <div class="list__item industry_content_div" data-id="6" data-name="Apparel &amp; Fashion">
                    <div class="industry_first_letter">
                    </div>Apparel &amp; Fashion
                  </div>
                </div>
                <div data-text="Architecture &amp; Planning">
                  <div class="list__item industry_content_div" data-id="7" data-name="Architecture &amp; Planning">
                    <div class="industry_first_letter">
                    </div>Architecture &amp; Planning
                  </div>
                </div>
                <div data-text="Arts and Crafts">
                  <div class="list__item industry_content_div" data-id="8" data-name="Arts and Crafts">
                    <div class="industry_first_letter">
                    </div>Arts and Crafts
                  </div>
                </div>
                <div data-text="Automotive">
                  <div class="list__item industry_content_div" data-id="9" data-name="Automotive">
                    <div class="industry_first_letter">
                    </div>Automotive
                  </div>
                </div>
                <div data-text="Aviation &amp; Aerospace">
                  <div class="list__item industry_content_div" data-id="10" data-name="Aviation &amp; Aerospace">
                    <div class="industry_first_letter">
                    </div>Aviation &amp; Aerospace
                  </div>
                </div>
                <div data-text="Banking">
                  <div class="list__item industry_content_div" data-id="11" data-name="Banking">
                    <div class="industry_first_letter">
                      B </div>Banking
                  </div>
                </div>
                <div data-text="Biotechnology">
                  <div class="list__item industry_content_div" data-id="12" data-name="Biotechnology">
                    <div class="industry_first_letter">
                    </div>Biotechnology
                  </div>
                </div>
                <div data-text="Broadcast Media">
                  <div class="list__item industry_content_div" data-id="13" data-name="Broadcast Media">
                    <div class="industry_first_letter">
                    </div>Broadcast Media
                  </div>
                </div>
                <div data-text="Building Materials">
                  <div class="list__item industry_content_div" data-id="14" data-name="Building Materials">
                    <div class="industry_first_letter">
                    </div>Building Materials
                  </div>
                </div>
                <div data-text="Business Supplies and Equipment">
                  <div class="list__item industry_content_div" data-id="15" data-name="Business Supplies and Equipment">
                    <div class="industry_first_letter">
                    </div>Business Supplies and Equipment
                  </div>
                </div>
                <div data-text="Business services">
                  <div class="list__item industry_content_div" data-id="16" data-name="Business services">
                    <div class="industry_first_letter">
                    </div>Business services
                  </div>
                </div>
                <div data-text="Capital Markets">
                  <div class="list__item industry_content_div" data-id="17" data-name="Capital Markets">
                    <div class="industry_first_letter">
                      C </div>Capital Markets
                  </div>
                </div>
                <div data-text="Chemicals">
                  <div class="list__item industry_content_div" data-id="18" data-name="Chemicals">
                    <div class="industry_first_letter">
                    </div>Chemicals
                  </div>
                </div>
                <div data-text="Civic &amp; Social Organization">
                  <div class="list__item industry_content_div" data-id="19" data-name="Civic &amp; Social Organization">
                    <div class="industry_first_letter">
                    </div>Civic &amp; Social Organization
                  </div>
                </div>
                <div data-text="Civil Engineering">
                  <div class="list__item industry_content_div" data-id="20" data-name="Civil Engineering">
                    <div class="industry_first_letter">
                    </div>Civil Engineering
                  </div>
                </div>
                <div data-text="Commercial Real Estate">
                  <div class="list__item industry_content_div" data-id="21" data-name="Commercial Real Estate">
                    <div class="industry_first_letter">
                    </div>Commercial Real Estate
                  </div>
                </div>
                <div data-text="Computer &amp; Network Security">
                  <div class="list__item industry_content_div" data-id="22" data-name="Computer &amp; Network Security">
                    <div class="industry_first_letter">
                    </div>Computer &amp; Network Security
                  </div>
                </div>
                <div data-text="Computer Games">
                  <div class="list__item industry_content_div" data-id="23" data-name="Computer Games">
                    <div class="industry_first_letter">
                    </div>Computer Games
                  </div>
                </div>
                <div data-text="Computer Hardware">
                  <div class="list__item industry_content_div" data-id="24" data-name="Computer Hardware">
                    <div class="industry_first_letter">
                    </div>Computer Hardware
                  </div>
                </div>
                <div data-text="Computer Networking">
                  <div class="list__item industry_content_div" data-id="25" data-name="Computer Networking">
                    <div class="industry_first_letter">
                    </div>Computer Networking
                  </div>
                </div>
                <div data-text="Computer Software">
                  <div class="list__item industry_content_div" data-id="26" data-name="Computer Software">
                    <div class="industry_first_letter">
                    </div>Computer Software
                  </div>
                </div>
                <div data-text="Construction">
                  <div class="list__item industry_content_div" data-id="27" data-name="Construction">
                    <div class="industry_first_letter">
                    </div>Construction
                  </div>
                </div>
                <div data-text="Consumer Electronics">
                  <div class="list__item industry_content_div" data-id="28" data-name="Consumer Electronics">
                    <div class="industry_first_letter">
                    </div>Consumer Electronics
                  </div>
                </div>
                <div data-text="Consumer Goods">
                  <div class="list__item industry_content_div" data-id="29" data-name="Consumer Goods">
                    <div class="industry_first_letter">
                    </div>Consumer Goods
                  </div>
                </div>
                <div data-text="Consumer Services">
                  <div class="list__item industry_content_div" data-id="30" data-name="Consumer Services">
                    <div class="industry_first_letter">
                    </div>Consumer Services
                  </div>
                </div>
                <div data-text="Cosmetics">
                  <div class="list__item industry_content_div" data-id="31" data-name="Cosmetics">
                    <div class="industry_first_letter">
                    </div>Cosmetics
                  </div>
                </div>
                <div data-text="Dairy">
                  <div class="list__item industry_content_div" data-id="32" data-name="Dairy">
                    <div class="industry_first_letter">
                      D </div>Dairy
                  </div>
                </div>
                <div data-text="Defense &amp; Space">
                  <div class="list__item industry_content_div" data-id="33" data-name="Defense &amp; Space">
                    <div class="industry_first_letter">
                    </div>Defense &amp; Space
                  </div>
                </div>
                <div data-text="Design">
                  <div class="list__item industry_content_div" data-id="34" data-name="Design">
                    <div class="industry_first_letter">
                    </div>Design
                  </div>
                </div>
                <div data-text="E-Learning">
                  <div class="list__item industry_content_div" data-id="35" data-name="E-Learning">
                    <div class="industry_first_letter">
                      E </div>E-Learning
                  </div>
                </div>
                <div data-text="Education Management">
                  <div class="list__item industry_content_div" data-id="36" data-name="Education Management">
                    <div class="industry_first_letter">
                    </div>Education Management
                  </div>
                </div>
                <div data-text="Electrical/Electronic Manufacturing">
                  <div class="list__item industry_content_div" data-id="37" data-name="Electrical/Electronic Manufacturing">
                    <div class="industry_first_letter">
                    </div>Electrical/Electronic Manufacturing
                  </div>
                </div>
                <div data-text="Entertainment">
                  <div class="list__item industry_content_div" data-id="38" data-name="Entertainment">
                    <div class="industry_first_letter">
                    </div>Entertainment
                  </div>
                </div>
                <div data-text="Environmental Services">
                  <div class="list__item industry_content_div" data-id="39" data-name="Environmental Services">
                    <div class="industry_first_letter">
                    </div>Environmental Services
                  </div>
                </div>
                <div data-text="Events Services">
                  <div class="list__item industry_content_div" data-id="40" data-name="Events Services">
                    <div class="industry_first_letter">
                    </div>Events Services
                  </div>
                </div>
                <div data-text="Executive Office">
                  <div class="list__item industry_content_div" data-id="41" data-name="Executive Office">
                    <div class="industry_first_letter">
                    </div>Executive Office
                  </div>
                </div>
                <div data-text="Facilities Services">
                  <div class="list__item industry_content_div" data-id="42" data-name="Facilities Services">
                    <div class="industry_first_letter">
                      F </div>Facilities Services
                  </div>
                </div>
                <div data-text="Farming and Fishery">
                  <div class="list__item industry_content_div" data-id="43" data-name="Farming and Fishery">
                    <div class="industry_first_letter">
                    </div>Farming and Fishery
                  </div>
                </div>
                <div data-text="Financial Services">
                  <div class="list__item industry_content_div" data-id="44" data-name="Financial Services">
                    <div class="industry_first_letter">
                    </div>Financial Services
                  </div>
                </div>
                <div data-text="Fine Art">
                  <div class="list__item industry_content_div" data-id="45" data-name="Fine Art">
                    <div class="industry_first_letter">
                    </div>Fine Art
                  </div>
                </div>
                <div data-text="Food &amp; Beverages">
                  <div class="list__item industry_content_div" data-id="46" data-name="Food &amp; Beverages">
                    <div class="industry_first_letter">
                    </div>Food &amp; Beverages
                  </div>
                </div>
                <div data-text="Food Production">
                  <div class="list__item industry_content_div" data-id="47" data-name="Food Production">
                    <div class="industry_first_letter">
                    </div>Food Production
                  </div>
                </div>
                <div data-text="Fund-Raising">
                  <div class="list__item industry_content_div" data-id="48" data-name="Fund-Raising">
                    <div class="industry_first_letter">
                    </div>Fund-Raising
                  </div>
                </div>
                <div data-text="Furniture">
                  <div class="list__item industry_content_div" data-id="49" data-name="Furniture">
                    <div class="industry_first_letter">
                    </div>Furniture
                  </div>
                </div>
                <div data-text="Gambling &amp; Casinos">
                  <div class="list__item industry_content_div" data-id="50" data-name="Gambling &amp; Casinos">
                    <div class="industry_first_letter">
                      G </div>Gambling &amp; Casinos
                  </div>
                </div>
                <div data-text="Glass, Ceramics &amp; Concrete">
                  <div class="list__item industry_content_div" data-id="51" data-name="Glass, Ceramics &amp; Concrete">
                    <div class="industry_first_letter">
                    </div>Glass, Ceramics &amp; Concrete
                  </div>
                </div>
                <div data-text="Government Administration">
                  <div class="list__item industry_content_div" data-id="52" data-name="Government Administration">
                    <div class="industry_first_letter">
                    </div>Government Administration
                  </div>
                </div>
                <div data-text="Government Relations">
                  <div class="list__item industry_content_div" data-id="53" data-name="Government Relations">
                    <div class="industry_first_letter">
                    </div>Government Relations
                  </div>
                </div>
                <div data-text="Graphic Design">
                  <div class="list__item industry_content_div" data-id="54" data-name="Graphic Design">
                    <div class="industry_first_letter">
                    </div>Graphic Design
                  </div>
                </div>
                <div data-text="Health, Wellness and Fitness">
                  <div class="list__item industry_content_div" data-id="55" data-name="Health, Wellness and Fitness">
                    <div class="industry_first_letter">
                      H </div>Health, Wellness and Fitness
                  </div>
                </div>
                <div data-text="Higher Education">
                  <div class="list__item industry_content_div" data-id="56" data-name="Higher Education">
                    <div class="industry_first_letter">
                    </div>Higher Education
                  </div>
                </div>
                <div data-text="Hospital &amp; Health Care">
                  <div class="list__item industry_content_div" data-id="57" data-name="Hospital &amp; Health Care">
                    <div class="industry_first_letter">
                    </div>Hospital &amp; Health Care
                  </div>
                </div>
                <div data-text="Hospitality">
                  <div class="list__item industry_content_div" data-id="58" data-name="Hospitality">
                    <div class="industry_first_letter">
                    </div>Hospitality
                  </div>
                </div>
                <div data-text="Human Resources">
                  <div class="list__item industry_content_div" data-id="59" data-name="Human Resources">
                    <div class="industry_first_letter">
                    </div>Human Resources
                  </div>
                </div>
                <div data-text="Import and Export">
                  <div class="list__item industry_content_div" data-id="60" data-name="Import and Export">
                    <div class="industry_first_letter">
                      I </div>Import and Export
                  </div>
                </div>
                <div data-text="Individual &amp; Family Services">
                  <div class="list__item industry_content_div" data-id="61" data-name="Individual &amp; Family Services">
                    <div class="industry_first_letter">
                    </div>Individual &amp; Family Services
                  </div>
                </div>
                <div data-text="Industrial Automation">
                  <div class="list__item industry_content_div" data-id="62" data-name="Industrial Automation">
                    <div class="industry_first_letter">
                    </div>Industrial Automation
                  </div>
                </div>
                <div data-text="Information Services">
                  <div class="list__item industry_content_div" data-id="63" data-name="Information Services">
                    <div class="industry_first_letter">
                    </div>Information Services
                  </div>
                </div>
                <div data-text="Information Technology and Services">
                  <div class="list__item industry_content_div" data-id="64" data-name="Information Technology and Services">
                    <div class="industry_first_letter">
                    </div>Information Technology and Services
                  </div>
                </div>
                <div data-text="Insurance">
                  <div class="list__item industry_content_div" data-id="65" data-name="Insurance">
                    <div class="industry_first_letter">
                    </div>Insurance
                  </div>
                </div>
                <div data-text="International Affairs">
                  <div class="list__item industry_content_div" data-id="66" data-name="International Affairs">
                    <div class="industry_first_letter">
                    </div>International Affairs
                  </div>
                </div>
                <div data-text="International Trade and Development">
                  <div class="list__item industry_content_div" data-id="67" data-name="International Trade and Development">
                    <div class="industry_first_letter">
                    </div>International Trade and Development
                  </div>
                </div>
                <div data-text="Internet">
                  <div class="list__item industry_content_div" data-id="68" data-name="Internet">
                    <div class="industry_first_letter">
                    </div>Internet
                  </div>
                </div>
                <div data-text="Investment Banking">
                  <div class="list__item industry_content_div" data-id="69" data-name="Investment Banking">
                    <div class="industry_first_letter">
                    </div>Investment Banking
                  </div>
                </div>
                <div data-text="Investment Management">
                  <div class="list__item industry_content_div" data-id="70" data-name="Investment Management">
                    <div class="industry_first_letter">
                    </div>Investment Management
                  </div>
                </div>
                <div data-text="Judiciary">
                  <div class="list__item industry_content_div" data-id="71" data-name="Judiciary">
                    <div class="industry_first_letter">
                      J </div>Judiciary
                  </div>
                </div>
                <div data-text="Law Enforcement">
                  <div class="list__item industry_content_div" data-id="72" data-name="Law Enforcement">
                    <div class="industry_first_letter">
                      L </div>Law Enforcement
                  </div>
                </div>
                <div data-text="Law Practice">
                  <div class="list__item industry_content_div" data-id="73" data-name="Law Practice">
                    <div class="industry_first_letter">
                    </div>Law Practice
                  </div>
                </div>
                <div data-text="Legal Services">
                  <div class="list__item industry_content_div" data-id="74" data-name="Legal Services">
                    <div class="industry_first_letter">
                    </div>Legal Services
                  </div>
                </div>
                <div data-text="Legislative Office">
                  <div class="list__item industry_content_div" data-id="75" data-name="Legislative Office">
                    <div class="industry_first_letter">
                    </div>Legislative Office
                  </div>
                </div>
                <div data-text="Leisure, Travel &amp; Tourism">
                  <div class="list__item industry_content_div" data-id="76" data-name="Leisure, Travel &amp; Tourism">
                    <div class="industry_first_letter">
                    </div>Leisure, Travel &amp; Tourism
                  </div>
                </div>
                <div data-text="Libraries">
                  <div class="list__item industry_content_div" data-id="77" data-name="Libraries">
                    <div class="industry_first_letter">
                    </div>Libraries
                  </div>
                </div>
                <div data-text="Logistics and Supply Chain">
                  <div class="list__item industry_content_div" data-id="78" data-name="Logistics and Supply Chain">
                    <div class="industry_first_letter">
                    </div>Logistics and Supply Chain
                  </div>
                </div>
                <div data-text="Luxury Goods &amp; Jewelry">
                  <div class="list__item industry_content_div" data-id="79" data-name="Luxury Goods &amp; Jewelry">
                    <div class="industry_first_letter">
                    </div>Luxury Goods &amp; Jewelry
                  </div>
                </div>
                <div data-text="Machinery">
                  <div class="list__item industry_content_div" data-id="80" data-name="Machinery">
                    <div class="industry_first_letter">
                      M </div>Machinery
                  </div>
                </div>
                <div data-text="Management Consulting">
                  <div class="list__item industry_content_div" data-id="81" data-name="Management Consulting">
                    <div class="industry_first_letter">
                    </div>Management Consulting
                  </div>
                </div>
                <div data-text="Maritime">
                  <div class="list__item industry_content_div" data-id="82" data-name="Maritime">
                    <div class="industry_first_letter">
                    </div>Maritime
                  </div>
                </div>
                <div data-text="Market Research">
                  <div class="list__item industry_content_div" data-id="83" data-name="Market Research">
                    <div class="industry_first_letter">
                    </div>Market Research
                  </div>
                </div>
                <div data-text="Marketing and Advertising">
                  <div class="list__item industry_content_div" data-id="84" data-name="Marketing and Advertising">
                    <div class="industry_first_letter">
                    </div>Marketing and Advertising
                  </div>
                </div>
                <div data-text="Mechanical or Industrial Engineering">
                  <div class="list__item industry_content_div" data-id="85" data-name="Mechanical or Industrial Engineering">
                    <div class="industry_first_letter">
                    </div>Mechanical or Industrial Engineering
                  </div>
                </div>
                <div data-text="Media Production">
                  <div class="list__item industry_content_div" data-id="86" data-name="Media Production">
                    <div class="industry_first_letter">
                    </div>Media Production
                  </div>
                </div>
                <div data-text="Medical Devices">
                  <div class="list__item industry_content_div" data-id="87" data-name="Medical Devices">
                    <div class="industry_first_letter">
                    </div>Medical Devices
                  </div>
                </div>
                <div data-text="Medical Practice">
                  <div class="list__item industry_content_div" data-id="88" data-name="Medical Practice">
                    <div class="industry_first_letter">
                    </div>Medical Practice
                  </div>
                </div>
                <div data-text="Mental Health Care">
                  <div class="list__item industry_content_div" data-id="89" data-name="Mental Health Care">
                    <div class="industry_first_letter">
                    </div>Mental Health Care
                  </div>
                </div>
                <div data-text="Military">
                  <div class="list__item industry_content_div" data-id="90" data-name="Military">
                    <div class="industry_first_letter">
                    </div>Military
                  </div>
                </div>
                <div data-text="Mining &amp; Metals">
                  <div class="list__item industry_content_div" data-id="91" data-name="Mining &amp; Metals">
                    <div class="industry_first_letter">
                    </div>Mining &amp; Metals
                  </div>
                </div>
                <div data-text="Misc. Manufacturing">
                  <div class="list__item industry_content_div" data-id="92" data-name="Misc. Manufacturing">
                    <div class="industry_first_letter">
                    </div>Misc. Manufacturing
                  </div>
                </div>
                <div data-text="Misc. Military/Gov">
                  <div class="list__item industry_content_div" data-id="93" data-name="Misc. Military/Gov">
                    <div class="industry_first_letter">
                    </div>Misc. Military/Gov
                  </div>
                </div>
                <div data-text="Misc. Services">
                  <div class="list__item industry_content_div" data-id="94" data-name="Misc. Services">
                    <div class="industry_first_letter">
                    </div>Misc. Services
                  </div>
                </div>
                <div data-text="Motion Pictures and Film">
                  <div class="list__item industry_content_div" data-id="95" data-name="Motion Pictures and Film">
                    <div class="industry_first_letter">
                    </div>Motion Pictures and Film
                  </div>
                </div>
                <div data-text="Multi-Sector Companies">
                  <div class="list__item industry_content_div" data-id="96" data-name="Multi-Sector Companies">
                    <div class="industry_first_letter">
                    </div>Multi-Sector Companies
                  </div>
                </div>
                <div data-text="Museums and Institutions">
                  <div class="list__item industry_content_div" data-id="97" data-name="Museums and Institutions">
                    <div class="industry_first_letter">
                    </div>Museums and Institutions
                  </div>
                </div>
                <div data-text="Music">
                  <div class="list__item industry_content_div" data-id="98" data-name="Music">
                    <div class="industry_first_letter">
                    </div>Music
                  </div>
                </div>
                <div data-text="Nanotechnology">
                  <div class="list__item industry_content_div" data-id="99" data-name="Nanotechnology">
                    <div class="industry_first_letter">
                      N </div>Nanotechnology
                  </div>
                </div>
                <div data-text="Newspapers">
                  <div class="list__item industry_content_div" data-id="100" data-name="Newspapers">
                    <div class="industry_first_letter">
                    </div>Newspapers
                  </div>
                </div>
                <div data-text="No specific industry">
                  <div class="list__item industry_content_div" data-id="101" data-name="No specific industry">
                    <div class="industry_first_letter">
                    </div>No specific industry
                  </div>
                </div>
                <div data-text="Non-Profit Organization Management">
                  <div class="list__item industry_content_div" data-id="102" data-name="Non-Profit Organization Management">
                    <div class="industry_first_letter">
                    </div>Non-Profit Organization Management
                  </div>
                </div>
                <div data-text="Oil &amp; Energy">
                  <div class="list__item industry_content_div" data-id="103" data-name="Oil &amp; Energy">
                    <div class="industry_first_letter">
                      O </div>Oil &amp; Energy
                  </div>
                </div>
                <div data-text="Online Media">
                  <div class="list__item industry_content_div" data-id="104" data-name="Online Media">
                    <div class="industry_first_letter">
                    </div>Online Media
                  </div>
                </div>
                <div data-text="Outsourcing/Offshoring">
                  <div class="list__item industry_content_div" data-id="105" data-name="Outsourcing/Offshoring">
                    <div class="industry_first_letter">
                    </div>Outsourcing/Offshoring
                  </div>
                </div>
                <div data-text="Package/Freight Delivery">
                  <div class="list__item industry_content_div" data-id="106" data-name="Package/Freight Delivery">
                    <div class="industry_first_letter">
                      P </div>Package/Freight Delivery
                  </div>
                </div>
                <div data-text="Packaging and Containers">
                  <div class="list__item industry_content_div" data-id="107" data-name="Packaging and Containers">
                    <div class="industry_first_letter">
                    </div>Packaging and Containers
                  </div>
                </div>
                <div data-text="Paper &amp; Forest Products">
                  <div class="list__item industry_content_div" data-id="108" data-name="Paper &amp; Forest Products">
                    <div class="industry_first_letter">
                    </div>Paper &amp; Forest Products
                  </div>
                </div>
                <div data-text="Performing Arts">
                  <div class="list__item industry_content_div" data-id="109" data-name="Performing Arts">
                    <div class="industry_first_letter">
                    </div>Performing Arts
                  </div>
                </div>
                <div data-text="Pharmaceuticals">
                  <div class="list__item industry_content_div" data-id="110" data-name="Pharmaceuticals">
                    <div class="industry_first_letter">
                    </div>Pharmaceuticals
                  </div>
                </div>
                <div data-text="Philanthropy">
                  <div class="list__item industry_content_div" data-id="111" data-name="Philanthropy">
                    <div class="industry_first_letter">
                    </div>Philanthropy
                  </div>
                </div>
                <div data-text="Photography">
                  <div class="list__item industry_content_div" data-id="112" data-name="Photography">
                    <div class="industry_first_letter">
                    </div>Photography
                  </div>
                </div>
                <div data-text="Plastics">
                  <div class="list__item industry_content_div" data-id="113" data-name="Plastics">
                    <div class="industry_first_letter">
                    </div>Plastics
                  </div>
                </div>
                <div data-text="Political Organization">
                  <div class="list__item industry_content_div" data-id="114" data-name="Political Organization">
                    <div class="industry_first_letter">
                    </div>Political Organization
                  </div>
                </div>
                <div data-text="Primary/Secondary Education">
                  <div class="list__item industry_content_div" data-id="115" data-name="Primary/Secondary Education">
                    <div class="industry_first_letter">
                    </div>Primary/Secondary Education
                  </div>
                </div>
                <div data-text="Printing">
                  <div class="list__item industry_content_div" data-id="116" data-name="Printing">
                    <div class="industry_first_letter">
                    </div>Printing
                  </div>
                </div>
                <div data-text="Professional Training &amp; Coaching">
                  <div class="list__item industry_content_div" data-id="117" data-name="Professional Training &amp; Coaching">
                    <div class="industry_first_letter">
                    </div>Professional Training &amp; Coaching
                  </div>
                </div>
                <div data-text="Program Development">
                  <div class="list__item industry_content_div" data-id="118" data-name="Program Development">
                    <div class="industry_first_letter">
                    </div>Program Development
                  </div>
                </div>
                <div data-text="Public Policy">
                  <div class="list__item industry_content_div" data-id="119" data-name="Public Policy">
                    <div class="industry_first_letter">
                    </div>Public Policy
                  </div>
                </div>
                <div data-text="Public Relations and Communications">
                  <div class="list__item industry_content_div" data-id="120" data-name="Public Relations and Communications">
                    <div class="industry_first_letter">
                    </div>Public Relations and Communications
                  </div>
                </div>
                <div data-text="Public Safety">
                  <div class="list__item industry_content_div" data-id="121" data-name="Public Safety">
                    <div class="industry_first_letter">
                    </div>Public Safety
                  </div>
                </div>
                <div data-text="Publishing">
                  <div class="list__item industry_content_div" data-id="122" data-name="Publishing">
                    <div class="industry_first_letter">
                    </div>Publishing
                  </div>
                </div>
                <div data-text="Railroad Manufacture">
                  <div class="list__item industry_content_div" data-id="123" data-name="Railroad Manufacture">
                    <div class="industry_first_letter">
                      R </div>Railroad Manufacture
                  </div>
                </div>
                <div data-text="Ranching">
                  <div class="list__item industry_content_div" data-id="124" data-name="Ranching">
                    <div class="industry_first_letter">
                    </div>Ranching
                  </div>
                </div>
                <div data-text="Real Estate">
                  <div class="list__item industry_content_div" data-id="125" data-name="Real Estate">
                    <div class="industry_first_letter">
                    </div>Real Estate
                  </div>
                </div>
                <div data-text="Recreational Facilities and Services">
                  <div class="list__item industry_content_div" data-id="126" data-name="Recreational Facilities and Services">
                    <div class="industry_first_letter">
                    </div>Recreational Facilities and Services
                  </div>
                </div>
                <div data-text="Religious Institutions">
                  <div class="list__item industry_content_div" data-id="127" data-name="Religious Institutions">
                    <div class="industry_first_letter">
                    </div>Religious Institutions
                  </div>
                </div>
                <div data-text="Renewables &amp; Environment">
                  <div class="list__item industry_content_div" data-id="128" data-name="Renewables &amp; Environment">
                    <div class="industry_first_letter">
                    </div>Renewables &amp; Environment
                  </div>
                </div>
                <div data-text="Research">
                  <div class="list__item industry_content_div" data-id="129" data-name="Research">
                    <div class="industry_first_letter">
                    </div>Research
                  </div>
                </div>
                <div data-text="Restaurants">
                  <div class="list__item industry_content_div" data-id="130" data-name="Restaurants">
                    <div class="industry_first_letter">
                    </div>Restaurants
                  </div>
                </div>
                <div data-text="Retail">
                  <div class="list__item industry_content_div" data-id="131" data-name="Retail">
                    <div class="industry_first_letter">
                    </div>Retail
                  </div>
                </div>
                <div data-text="Security and Investigations">
                  <div class="list__item industry_content_div" data-id="132" data-name="Security and Investigations">
                    <div class="industry_first_letter">
                      S </div>Security and Investigations
                  </div>
                </div>
                <div data-text="Semiconductors">
                  <div class="list__item industry_content_div" data-id="133" data-name="Semiconductors">
                    <div class="industry_first_letter">
                    </div>Semiconductors
                  </div>
                </div>
                <div data-text="Shipbuilding">
                  <div class="list__item industry_content_div" data-id="134" data-name="Shipbuilding">
                    <div class="industry_first_letter">
                    </div>Shipbuilding
                  </div>
                </div>
                <div data-text="Sporting Goods">
                  <div class="list__item industry_content_div" data-id="135" data-name="Sporting Goods">
                    <div class="industry_first_letter">
                    </div>Sporting Goods
                  </div>
                </div>
                <div data-text="Sports">
                  <div class="list__item industry_content_div" data-id="136" data-name="Sports">
                    <div class="industry_first_letter">
                    </div>Sports
                  </div>
                </div>
                <div data-text="Staffing and Recruiting">
                  <div class="list__item industry_content_div" data-id="137" data-name="Staffing and Recruiting">
                    <div class="industry_first_letter">
                    </div>Staffing and Recruiting
                  </div>
                </div>
                <div data-text="Supermarkets">
                  <div class="list__item industry_content_div" data-id="138" data-name="Supermarkets">
                    <div class="industry_first_letter">
                    </div>Supermarkets
                  </div>
                </div>
                <div data-text="Telecommunications">
                  <div class="list__item industry_content_div" data-id="139" data-name="Telecommunications">
                    <div class="industry_first_letter">
                      T </div>Telecommunications
                  </div>
                </div>
                <div data-text="Textiles">
                  <div class="list__item industry_content_div" data-id="140" data-name="Textiles">
                    <div class="industry_first_letter">
                    </div>Textiles
                  </div>
                </div>
                <div data-text="Think Tanks">
                  <div class="list__item industry_content_div" data-id="141" data-name="Think Tanks">
                    <div class="industry_first_letter">
                    </div>Think Tanks
                  </div>
                </div>
                <div data-text="Tobacco">
                  <div class="list__item industry_content_div" data-id="142" data-name="Tobacco">
                    <div class="industry_first_letter">
                    </div>Tobacco
                  </div>
                </div>
                <div data-text="Translation and Localization">
                  <div class="list__item industry_content_div" data-id="143" data-name="Translation and Localization">
                    <div class="industry_first_letter">
                    </div>Translation and Localization
                  </div>
                </div>
                <div data-text="Transportation/Trucking/Railroad">
                  <div class="list__item industry_content_div" data-id="144" data-name="Transportation/Trucking/Railroad">
                    <div class="industry_first_letter">
                    </div>Transportation/Trucking/Railroad
                  </div>
                </div>
                <div data-text="Utilities">
                  <div class="list__item industry_content_div" data-id="145" data-name="Utilities">
                    <div class="industry_first_letter">
                      U </div>Utilities
                  </div>
                </div>
                <div data-text="Venture Capital &amp; Private Equity">
                  <div class="list__item industry_content_div" data-id="146" data-name="Venture Capital &amp; Private Equity">
                    <div class="industry_first_letter">
                      V </div>Venture Capital &amp; Private Equity
                  </div>
                </div>
                <div data-text="Veterinary">
                  <div class="list__item industry_content_div" data-id="147" data-name="Veterinary">
                    <div class="industry_first_letter">
                    </div>Veterinary
                  </div>
                </div>
                <div data-text="Warehousing">
                  <div class="list__item industry_content_div" data-id="148" data-name="Warehousing">
                    <div class="industry_first_letter">
                      W </div>Warehousing
                  </div>
                </div>
                <div data-text="Water supply">
                  <div class="list__item industry_content_div" data-id="149" data-name="Water supply">
                    <div class="industry_first_letter">
                    </div>Water supply
                  </div>
                </div>
                <div data-text="Wholesale">
                  <div class="list__item industry_content_div" data-id="150" data-name="Wholesale">
                    <div class="industry_first_letter">
                    </div>Wholesale
                  </div>
                </div>
                <div data-text="Wine and Spirits">
                  <div class="list__item industry_content_div" data-id="151" data-name="Wine and Spirits">
                    <div class="industry_first_letter">
                    </div>Wine and Spirits
                  </div>
                </div>
                <div data-text="Wireless">
                  <div class="list__item industry_content_div" data-id="152" data-name="Wireless">
                    <div class="industry_first_letter">
                    </div>Wireless
                  </div>
                </div>
                <div data-text="Writing and Editing">
                  <div class="list__item industry_content_div" data-id="153" data-name="Writing and Editing">
                    <div class="industry_first_letter">
                    </div>Writing and Editing
                  </div>
                </div>
              </div>
            </div>

            <div class="jss1337 profile__btn_wrap" style="padding: 10%;">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelindustry" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="goal" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backgoal">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>

          <form id="goal_form" name="frm_my_goal" class="jss264">
            <input type="hidden" name="selected_goals" value="" />
            <input type="hidden" name="removed_goals" value="" />
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>My Goals</span></h2>
            <div id="my_goal_message" class="sbmt__msg"></div>
            <div class="jss269">
              <div class="settings__item__block">
                <div class="settings__goals-wrapper">
                  <i class="fa fa-briefcase icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="1"><span>Hire employees</span></div>
                    <div class="settings__goal" data-id="2"><span>Find a new job</span></div>
                    <div class="settings__goal" data-id="3"><span>Find co-founders</span></div>
                  </div>
                </div>
                <div class="settings__goals-wrapper">
                  <i class="fa fa-money icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="4"><span>Invest in projects</span></div>
                    <div class="settings__goal" data-id="5"><span>Find investors</span></div>
                    <div class="settings__goal" data-id="6"><span>Grow my business</span></div>
                  </div>
                </div>
                <div class="settings__goals-wrapper">
                  <i class="fas fa-pen-square-o icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="7"><span>Hire freelancers</span></div>
                    <div class="settings__goal" data-id="8"><span>Hire freelancer gigs</span></div>
                  </div>
                </div>
                <div class="settings__goals-wrapper">
                  <i class="fa fa-snowflake-o icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="9"><span>Find mentor</span></div>
                    <div class="settings__goal" data-id="10"><span>Mentor others</span></div>
                    <div class="settings__goal" data-id="11"><span>Explore a career change</span></div>
                  </div>
                </div>
                <div class="settings__goals-wrapper">
                  <i class="fa fa-lightbulb-o icon-geo" aria-hidden="true"></i>
                  <div class="settings__goals">
                    <div class="settings__goal" data-id="12"><span>Make new friends</span></div>
                    <div class="settings__goal" data-id="13"><span>Get inspired</span></div>
                  </div>
                </div>
              </div>
              <div class="settings__meta w-100">
                <p class="settings__meta-item"><span id="my_goals_count">0/3</span></p>
              </div>
            </div>

            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cancelgoal" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="identity" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="identitysetting">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>



          <!-- Change user name -->



          <form action="profile-change-username.php" class="jss264">
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>My Identity</span></h2>
            <div id="myIdentityMessage" class="sbmt__msg"></div>
            <div class="jss269">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Enter name</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="full_name" name="username" test-id="input-undefined" value="<?php $_SESSION ?>">
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="jss269">
                  <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Last name</span></p>
                  <div class="jss271">
                    <div class="jss272 profile__wrap">
                      <div class="jss277 profile__edt">
                        <input class="jss281" type="text" id="last_name" name="last_name"test-id="input-undefined" value="">
                      </div>
                    </div>
                  </div>
                </div> -->
            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="usercancel" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>

          </form>
          <h6 class="text-center" style="color: #0ad85d;opacity:0.8;"></h6>
        </div>


        <div id="changeDescription" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="changeDescriptions">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>


          <!---    Share your company and designation -->

          <form action="profile-change-designation.php" class="jss264">
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>My Description</span></h2>
            <div id="mydesMessage" class="sbmt__msg"></div>
            <div class="jss269">

              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" placeholder="Enter title" id="designation" name="title" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="jss269">
              <!-- <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Organization</span></p>-->
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="text" id="company" placeholder="Enter organization" name="organization" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="jss271">
              <div class="jss272 profile__wrap">
                <div class="jss277 profile__edt">
                  <input class="jss281" type="text" placeholder="Enter Location" id="designation" name="location" test-id="input-undefined" value="">
                </div>
              </div>
            </div>
            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cncelDescription" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" id="userchangeDescription" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="profileImage" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>


          <!-- User profile photo-->

          <form method="POST" class="jss264" enctype="multipart/form-data">
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>My photo</span></h2>
            <div id="myChangePwsMessage"></div>
            <div class="jss269">
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <canvas id="can"></canvas>
                  <input id="avtar" class="input--invisible" type="file" name="profileImage" id="profileImage">
                </div>
              </div>
            </div>
            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" type="button" color="secondary"><span>Cancel</span>
              </button>
              <button id="picSave" class="MuiButtonBase-root btn jss1338 jss1342 jss1339" name="save" color="primary"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="changepws" style="display: none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="changepwssetting">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>


          <!--   Change password   -->

          <form id="frm_chng_pws" class="jss264">
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>Change password</span></h2>
            <div id="myChangePwsMessage" class="sbmt__msg"></div>
            <div class="jss269">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Current</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="password" minlength="1" maxlength="10" placeholder="Enter 8-10 characters" id="current_password" name="current_password" test-id="input-undefined" value="">
                    <span toggle="#current_password" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="jss269">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>New</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input id="password" type="password" class="jss281 form-control" minlength="1" maxlength="10" id="password" placeholder="Enter new password" name="password" test-id="input-undefined">
                    <span toggle1="#password" class="fa fa-fw fa-eye field-icon toggle-password1"></span>
                    <!-- <input class="jss281" type="password" minlength="8" maxlength="10" id="password" placeholder="Enter new password" name="password"test-id="input-undefined" value=""> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="jss269">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Confirm</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input type="password" class="jss281 form-control" minlength="1" maxlen gth="10" name="password_confirm" placeholder="Enter new password" id="password_confirm" test-id="input-undefined">
                    <span toggle="#password_confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    <!-- <input class="jss281" type="password" minlength="8" maxlength="10" id="password_confirm" placeholder="Enter confirm password" name="password_confirm"test-id="input-undefined" value=""> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cncelchange" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" id="userchangepassword" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>


        <div id="emailChange" style="display:none;">
          <div class="jss105">
            <button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="emailsetting">
              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </button>
            <div class="jss108"><span class="jss109">My Profile</span></div>
          </div>



          <!--   change email   -->



          <form id="frm_chng_email" class="jss264">
            <h2 class="MuiTypography-root jss267 MuiTypography-h2"><span>Change email</span></h2>
            <div id="myemailMessage" class="sbmt__msg"></div>
            <div class="jss269">
              <p class="MuiTypography-root jss270 MuiTypography-body1"><span>Email address</span></p>
              <div class="jss271">
                <div class="jss272 profile__wrap">
                  <div class="jss277 profile__edt">
                    <input class="jss281" type="email" placeholder="Enter email address" id="email" name="email" test-id="input-undefined" value="">
                  </div>
                </div>
              </div>
            </div>
            <div class="jss1337 profile__btn_wrap">
              <button class="MuiButtonBase-root btn jss1338 jss1348 jss1339" tabindex="0" id="cncelemail" type="button" test-id="back" color="secondary" variant="contained"><span>Cancel</span>
              </button>
              <button class="MuiButtonBase-root btn jss1338 jss1342 jss1339" tabindex="0" type="submit" color="primary" variant="contained"><span>Confirm</span>
              </button>
            </div>
          </form>
        </div>



        <div id="setting">
          <div class="jss105">
            <button class="MuiButtonBase-root" tabindex="0" type="button">
              <a class="jss106" href="/dashboard.php">
                <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107">
                  <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
                </svg>
              </a>
            </button>
            <div class="jss108"><span class="jss109">Settings</span></div>
          </div>
          <ul class="settings__account-list">
            <li class="settings__account-item">
              <h2 class="settings__title"><span>Contact Preferences</span></h2>
            </li>
            <li class="settings__account-item">
              <div class="settings__account-switch-wrapper justify-content-between" data-checked="on">
                <span class="settings__account-switch-txt"><span>Enable Email Notifications</span></span>
                <label class="switch__pro">
                  <input type="checkbox" name="email_notification" id="email_notification" value="1" />
                  <span class="slider round"></span>
                </label>
              </div>
            </li>
            <li class="settings__account-item">
              <!-- <div class="settings__account-switch-wrapper justify-content-between">
                        <span class="settings__account-switch-txt"><span>Receive Monthly Newsletter</span></span>
                        <label class="switch__pro">
                        <input type="checkbox" name="newsletter" id="newsletter" value="1"  />
                          <span class="slider round"></span>
                        </label>
                    </div> -->
              <button type="button" test-id="upgrade-button" id="membershipUpgradeButton2" class="btn btn-secondary btn-sm" style="margin-bottom: 0px;">UPGRADE</button>
            </li>
          </ul>

          <ul class="settings__account-list">
            <li class="settings__account-item">
              <h2 class="settings__title"><span>CAT and JEE Scholarship</span></h2>
            </li>
            <?php
            if ($plan != 'none') {
            ?>
              <li class="settings__account-item  settings__account-item--interactive">
                <a class="settings__account-link setting-acc-color" href="postjob.php" target="_blank" rel="noopener noreferrer"><span>Post a job</span>&nbsp;<i class="fas fa-chevron-right user-summary"></i></a>
              </li>
            <?php }else{ ?>
              <li class="settings__account-item  settings__account-item--interactive">
                <div id="membershipUpgradeButton" class="settings__account-link setting-acc-color"  rel="noopener noreferrer"><span>Post a job</span>&nbsp;<i class="fas fa-chevron-right user-summary"></i></div>
              </li>
              <?php } ?>
          </ul>
          <ul class="settings__account-list">
            <li test-id="AccountSettingsSection" class="settings__account-item jss135">
              <h2 class="settings__title jss136"><span>Account</span></h2>
              <div class="jss137">
                <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss138">
                  <path d="M30.357 12.459H28.8a13.632 13.632 0 0 0-1.283-3.129l.035.068 1.067-1.067c.283-.28.458-.669.458-1.099s-.175-.818-.458-1.099l-2.795-2.88a1.577 1.577 0 0 0-1.065-.448h-.002a1.532 1.532 0 0 0-1.067.448L22.623 4.32a12.717 12.717 0 0 0-2.959-1.227l-.091-.021V1.589l.001-.067A1.525 1.525 0 0 0 17.947 0h-3.963a1.579 1.579 0 0 0-1.557 1.567V3.2a13.54 13.54 0 0 0-3.121 1.23l.071-.035L8.31 3.328a1.503 1.503 0 0 0-1.066-.459h-.001a1.523 1.523 0 0 0-1.066.458L3.201 6.132c-.276.285-.446.675-.446 1.104s.17.818.446 1.104l1.066 1.066a13.072 13.072 0 0 0-1.215 2.956l-.022.094H1.526c-.842 0-1.525.683-1.525 1.525v.034-.002 4.021a1.557 1.557 0 0 0 1.557 1.525h1.579a13.561 13.561 0 0 0 1.283 3.118l-.035-.067-1.067 1.067c-.281.283-.455.673-.455 1.104s.174.821.455 1.104l2.795 2.912c.275.272.649.445 1.064.459h.003a1.543 1.543 0 0 0 1.067-.459l1.067-1.067c.877.509 1.892.932 2.963 1.218l.088.02v1.568a1.569 1.569 0 0 0 1.658 1.461h4.007a1.568 1.568 0 0 0 1.557-1.557v-1.547a13.05 13.05 0 0 0 3.115-1.271l-.064.034 1.067 1.067c.273.276.649.449 1.065.459h.002a1.586 1.586 0 0 0 1.067-.459l2.965-2.805c.281-.283.455-.673.455-1.104s-.174-.821-.455-1.104l-1.067-1.067c.507-.877.933-1.891 1.227-2.959l.021-.091h1.557a1.58 1.58 0 0 0 1.462-1.574v-.027.001-3.979a1.741 1.741 0 0 0-1.638-1.557h-.004zm.064 5.504h-2.763l-.309 1.237a11.052 11.052 0 0 1-1.095 2.732l.029-.055-.576 1.067.843.853 1.067 1.067-2.773 2.784-1.92-1.92-1.067.587c-.772.434-1.666.799-2.607 1.049l-.081.018-1.184.32v2.752H14.06v-2.795l-1.195-.309a11.052 11.052 0 0 1-2.732-1.095l.055.029-1.067-.587-1.92 1.92-2.752-2.805 1.92-1.92-.587-1.067a11.571 11.571 0 0 1-1.048-2.605l-.019-.083-.341-1.173H1.622v-3.872h2.72l.309-1.205a11.437 11.437 0 0 1 1.096-2.735l-.03.058.576-1.067-.843-.853-1.067-1.067L7.156 4.45l1.92 1.92 1.067-.587a11.559 11.559 0 0 1 2.572-1.068l.084-.02 1.184-.309V1.623h3.851v2.731l1.195.309c1.017.262 1.907.627 2.732 1.095l-.055-.029 1.067.587 1.92-1.92 2.773 2.773-1.067 1.067-.843.853.576 1.067a11.95 11.95 0 0 1 1.047 2.602l.02.086.309 1.195h2.773c.038.031.067.07.085.115l.001.002z"></path>
                  <path d="M16 8.533A7.467 7.467 0 1 0 23.467 16 7.467 7.467 0 0 0 16 8.533zm0 13.355h-.011A5.877 5.877 0 1 1 21.866 16v.033A5.877 5.877 0 0 1 16 21.91h-.001z"></path>
                </svg>
              </div>
            </li>
            <li class="settings__account-item settings__account-item--interactive">
              <div class="settings__account-link setting-acc-color" id="changeEmailedit"><span>Change Email Address</span><i class="fas fa-pen user-summary"></i></div>
            </li>
            <li class="settings__account-item settings__account-item--interactive">
              <div class="settings__account-link setting-acc-color" id="changepwsedit"><span>Change password</span><i class="fas fa-pen user-summary"></i></div>
            </li>
          </ul>
          <ul class="settings__account-list">
            <li class="settings__account-item settings__account-item--interactive settings__account-item--no-title" onclick="">
              <a href="index.php?logout '1'">
                <div class="settings__account-link setting-acc-color" role="link" tabindex="0"><span>Log out</span><i class="fas fa-chevron-right user-summary"></i></div>
              </a>
            </li>
            <form id="logout-form" action="http://52.66.188.103/logout" method="POST" style="display: none;">
              <input type="hidden" name="_token" value="QiNYCI0Fni60mgD1OEtVVQvXxWXJEF66pqjaCRs3">
            </form>
          </ul>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<!--end:: Body -->


<!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
<script src="http://52.66.188.103/themes/geoconnectin/assets/js/hammer.min.js"></script>

<!-- pro popup -->
<form name='razorpayform' action="http://52.66.188.103/razor/status" method="POST">
  <input type="hidden" name="_token" value="QiNYCI0Fni60mgD1OEtVVQvXxWXJEF66pqjaCRs3">
  <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
  <input type="hidden" name="razorpay_signature" id="razorpay_signature">
  <input type="hidden" name="membership_id">
</form>
<div class="pro__modal modal fade" id="membershipUpgradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <img src="assets/images/pro-icon.svg" class="pro__icon">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-title text-center">
          <h4>PRO</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <input type="hidden" name="membership_buy_package" id="membership_buy_package" />
            <div class="pro__plan_wrap" id="membership_buy_packages">
              <div class="pro__plan_wrap_l1">
                <div class="pro__plan" data-id="1" package-name="Silver" package-amount="1000.00">
                  <div class="pro__plan_up"></span> <span class="pro__plan_month">Silver</span></div>
                  <div class="pro__plan_down"><span class="pro__plan_price">INR 1000.00</span> <span class="pro__plan_time">per year</span></div>
                </div>

                <div class="pro__plan" data-id="2" package-name="Gold" package-amount="1500.00">
                  <div class="pro__plan_up"> <span class="pro__plan_month">Gold</span></div>
                  <div class="pro__plan_down"><span class="pro__plan_price">INR 1500.00</span> <span class="pro__plan_time">per year</span></div>
                </div>

                <div class="pro__plan" data-id="3" package-name="Gold Plus" package-amount="2000.00">
                  <div class="pro__plan_up"> <span class="pro__plan_month">Gold Plus</span></div>
                  <div class="pro__plan_down"><span class="pro__plan_price">INR 2000.00</span> <span class="pro__plan_time">per year</span></div>
                </div>
              </div>
              <div class="text-center text-muted delimiter">Please select any one of them</div>
              <hr>
              <button type="button" id="membership_packages_buy_btn" class="btn btn-info btn-block btn-round regular" disabled>Upgrade</button>
            </div>

            <div class="pro__plan_wrap pro__plan_selected" id="membership_buy_details" style="display: none;">
              <div class="pro__plan active"><strong>Package Name:</strong> <span id="membership_buy_details_name"></span></div>
              <div class="pro__plan active"><strong>Package Amount:</strong> <span id="membership_buy_details_amount"></span></div>
              <div class="text-center text-muted delimiter">Please proceed with the payment with razorpay.</div>
              <hr>
              <button type="button" class="btn btn-info btn-block btn-round regular" id="membership_buy_pay">Pay</button>
            </div>

            <div class="pro__plan_wrap pro__plan_selected" id="membership_buy_status" style="display: none;">
              <div class="text-center text-muted delimiter f3">Go for a payment</div>
              <button type="button" class="btn btn-info btn-block btn-round regular">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /pro popup -->
<div class="pro__modal modal fade" id="successMDl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <img src="assets/images/pro-icon.svg" class="pro__icon">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-title text-center">
          <h4>PRO</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form>
            <div class="pro__plan_wrap pro__plan_selected" id="success">
              <div class="text-center text-muted delimiter" id="successMsg"></div>
              <hr>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- UPGRADE BUTTON FOR MOBILE -->
<!-- <div class="upgrade_sidenav">
    <a id="mblUpgrade" class="upgrade_btn">Upgrade</a>
  </div> -->




<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
<script>
  document.getElementById('frm_chng_email').addEventListener('submit', (event) => {
    event.preventDefault();
    let email = event.target[0].value
    fetch(`http://65.0.131.51/profile-change-email.php?email=${email}`).then(async (result) => {
      console.log('Reached here')
      data = await result.text()
      console.log(data);
      location.reload();
    }).catch(err => {
      console.log("Error : ", err)
    })
  })
  let form = document.getElementById('frm_chng_pws');
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    let formData = new FormData(form)
    fetch(`http://65.0.131.51/profile-change-pass.php`, {
      method: "POST",
      body: formData
    }).then(async (result) => {
      console.log('Reached here')
      data = await result.text()
      console.log(data);
      location.reload();
    }).catch(err => {
      console.log("Error : ", err)
    })
  })
  let industry_form = document.getElementById('industry_form')
  industry_form.addEventListener('submit', (event) => {
    event.preventDefault();
    let selected = document.getElementsByClassName('industry_selected')
    console.log('submitted')
    let industry = selected[0].innerText
    let formData = new FormData()
    formData.append('industry', industry)
    fetch(`http://65.0.131.51/profile-change-industry.php`, {
      method: "POST",
      body: formData
    }).then(async (result) => {
      let data = await result.text()
      console.log(data)
      location.reload();
    }).catch(err => {
      console.log("Error : ", err)
    })
  })

  let goal_form = document.getElementById("goal_form")
  goal_form.addEventListener('submit', (event) => {
    event.preventDefault();
    let selected = document.getElementsByClassName('selected--goal')
    console.log(selected.length)
    goals = []
    for (let i = 0; i < selected.length; i++) {
      let goal = selected[i].innerText
      goals.push(goal)
    }
    let formData = new FormData()
    formData.append('goals', goals.toString())
    fetch(`http://65.0.131.51/profile-add-goals.php`, {
      method: "POST",
      body: formData
    }).then(async (result) => {
      let data = await result.text()
      console.log(data)
      location.reload()
    }).catch(err => {
      console.log("Error : ", err)
    })
  })

  // Interest form

  let interest_form = document.getElementById("interest_form")
  interest_form.addEventListener('submit', (event) => {
    event.preventDefault();
    let selected = document.getElementsByClassName('selected--goal')
    console.log(selected.length)
    interests = []
    for (let i = 0; i < selected.length; i++) {
      let interest = selected[i].innerText
      interests.push(interest)
    }
    let formData = new FormData()
    formData.append('interests', interests.toString())
    fetch(`http://65.0.131.51/profile-add-interests.php`, {
      method: "POST",
      body: formData
    }).then(async (result) => {
      let data = await result.text()
      console.log(data)
      location.reload()
    }).catch(err => {
      console.log("Error : ", err)
    })
  })


  document.getElementById('slider_student').addEventListener('click', () => {
    console.log('clicked')
    let student = document.getElementById('is_student')
    console.log(student.checked)
  })


  let exp_form = document.getElementById('frm_my_experience');
  exp_form.addEventListener('submit', (event) => {
    event.preventDefault();
    let formData = new FormData()
    formData.append('is_student', event.target[0].checked)
    formData.append('date', event.target[1].value)
    fetch(`http://65.0.131.51/profile-add-exp.php`, {
      method: "POST",
      body: formData
    }).then(async (result) => {
      console.log('Reached here')
      data = await result.text()
      console.log(data);
      location.reload();
    }).catch(err => {
      console.log("Error : ", err)
    })
  })


  let picBtn = document.getElementById('picSave')
  picBtn.addEventListener('click', (event) => {
    event.preventDefault()
    let inputFileAvatar = document.getElementById("inputFileAvatar");
    let pic = inputFileAvatar.files[0]
    console.log(pic)
    let formData = new FormData()
    formData.append('profile', pic)
    picBtn.textContent = 'Uploading...'
    fetch(`http://65.0.131.51/profile-change-pic.php`, {
        method: "POST",
        body: formData
      }).then((result) => result.text())
      .then(data => {
        console.log(`Data = ${data}`)
        picBtn.textContent = 'Confirm'
        location.reload()
      }).catch(err => {
        console.log(`Error : ${err}`)
        picBtn.textContent = 'Confirm'
      })
  })



  let email_notification = document.getElementById('email_notification')
  email_notification.addEventListener('input', (event) => {
    let value = event.target.value
    let d = value === 1 ? false : true
    fetch(`http://65.0.131.51/email-notification.php?value=${d}`).then(res => res.text())
      .then((data) => {
        console.log(data)
      }).catch(err => {
        console.log(err)
      })
  })
</script>
<script language="javascript" type="text/javascript">
  function limitText(limitField, limitCount, limitNum) {
    var limitcrossmsg = "limit Cross";
    if (limitField.value.length > limitNum) {
      limitField.value = limitField.value.substring(0, limitNum);
      $("#myf").html(limitcrossmsg).show();
    } else {
      //limitCount.value = limitNum - limitField.value.length;
      $(".cnthide").hide();
      $(".cnt").html(limitField.value.length).show();
      $("#myf").html(limitcrossmsg).hide();
    }
  }
  const toBase64 = file => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = error => reject(error);
  });
  async function upload() {
    var imgcanvas = document.getElementById("can");
    var inputFileAvatar = document.getElementById("inputFileAvatar");
    var image = new SimpleImage(inputFileAvatar);
    image.drawTo(imgcanvas);

  }

  function searchIndustry() {
    industry_list_wrap

    var input, filter, elementWrap, elementContent, a, i, txtValue;
    input = document.getElementById("search_industry_input");

    filter = input.value.toUpperCase();
    elementWrap = document.getElementById("industry_list_wrap");

    elementContent = elementWrap.getElementsByTagName("div");

    for (i = 0; i < elementContent.length; i++) {
      // a = elementContent[i].getElementsByTagName("a")[0];
      txtValue = elementContent[i].textContent || elementContent[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        elementContent[i].style.display = "";
      } else {
        elementContent[i].style.display = "none";
      }
    }
  }

  $(document).ready(function() {

    // My Inresets
    fetch_tag();

    function fetch_tag(query = '') {
      $.ajax({
        url: "http://52.66.188.103/tag/search",
        method: 'GET',
        data: {
          query: query,
          added_tags: $('input[name=my_interests]').val(),
          removed_tags: $('input[name=my_interests_removed_tags]').val()
        },
        dataType: 'json',
        success: function(data) {
          $.each(data, function(i, value) {
            $('div.datac').html(value);
          });
        }
      })
    }

    $(document).on('keyup', '#serchtag', function() {
      var query = $(this).val();
      fetch_tag(query);
    });

    $(document).on('click', '.new-tag', function() {
      let tagName = $(this).attr('data-name');
      let tagId = $(this).attr('data-id');
      let existsData = $('input[name=my_interests]').val();
      let existsDataArr = existsData.split(',').filter(function(el) {
        return el.length != 0
      });

      existsDataArr.push(tagId);
      $('input[name=my_interests]').val(existsDataArr.join(','));

      $('#my_interets_added_tags').append('<button class="MuiButtonBase-root btn jss1330 jss1331 added-tag" tabindex="0" type="button" data-id="' + tagId + '" data-name="' + tagName + '"><span class="settings__interest-item">#' + tagName + '</span><i class="icon-geo icon-geo-Pass">X</i></button>')

      // UpFalert Removed tags



      let removedTags = $('input[name=my_interests_removed_tags]').val();
      let removedTagsArr = removedTags.split(',').filter(function(el) {
        return el.length != 0
      });
      removedTagsArr = removedTagsArr.filter(e => e !== tagId);
      $('input[name=my_interests_removed_tags]').val(removedTagsArr.join(','));
      $('#my_interests_count').html(existsDataArr.length);

      $(this).remove();
      fetch_tag($('#serchtag').val());
    })

    $(document).on('click', '.added-tag i', function() {
      let tagName = $(this).parent().attr('data-name');
      let tagId = $(this).parent().attr('data-id');


      // Update new tags


      let existsData = $('input[name=my_interests]').val();
      let existsDataArr = existsData.split(',').filter(function(el) {
        return el.length != 0
      });

      existsDataArr = existsDataArr.filter(e => e !== tagId);
      $('input[name=my_interests]').val(existsDataArr.join(','));

      // Update Removed tags



      let removedTags = $('input[name=my_interests_removed_tags]').val();
      let removedTagsArr = removedTags.split(',').filter(function(el) {
        return el.length != 0
      });
      removedTagsArr.push(tagId);
      $('input[name=my_interests_removed_tags]').val(removedTagsArr.join(','));

      // Update count



      $('#my_interests_count').html(existsDataArr.length);

      $(this).parent().remove();
      fetch_tag($('#serchtag').val());
    })

    $('form[name="my_interests_frm"]').submit(function(e) {
      e.preventDefault();

      $.ajax({
        url: "http://52.66.188.103/tags",
        method: 'PUT',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          tags: $('input[name=my_interests]').val()
        },
        success: function(data) {
          $("#my_interest_message").html(data.message).show();

          setTimeout(function() {
            $("#my_interest_message").fadeOut("slow").html('');
          }, 2500);
          setTimeout(function() {
            location.reload();
          }, 2500);
        }
      })
    })


    // Goals




    $(document).on('click', '.settings__goal', function() {
      $('#my_goal_message').html('');
      let goalId = $(this).attr('data-id');
      let existsData = $('input[name=selected_goals]').val();
      let existsDataArr = existsData.split(',').filter(function(el) {
        return el.length != 0
      });

      // Select/Unselect div



      if ($(this).hasClass('selected--goal')) {


        // Removed existing goal


        $(this).removeClass('selected--goal');
        existsDataArr = existsDataArr.filter(e => e !== goalId);

      } else {


        // Add goal

        // Check for maximum three goal



        if (existsDataArr.length >= 3) {
          $('#my_goal_message').html('You can choose maximum of three goals, please unselect one of the selected goals.');
          return false;
        }

        existsDataArr.push(goalId);
        $(this).addClass('selected--goal');

      }


      // Add comma separated goals into selected goal hidden field



      $('#my_goals_count').html(existsDataArr.length + '/3');
      $('input[name=selected_goals]').val(existsDataArr.join(','));
    })



    // Save my goals



    $('form[name="frm_my_goal"]').submit(function(e) {
      e.preventDefault();

      $.ajax({
        url: "http://52.66.188.103/goals",
        method: 'PUT',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          goals: $('input[name=selected_goals]').val()
        },
        success: function(data) {
          $("#my_goal_message").html(data.message).show();

          setTimeout(function() {
            $("#my_goal_message").fadeOut("slow").html('');
          }, 2500);
          setTimeout(function() {
            location.reload();
          }, 2500);
        }
      })
    })

    // $(document).on('keyup','#last_name','#full_name',function(){
    //   var full_name = $('#full_name').val();
    //   var last_name = $('#last_name').val();
    //   if ((full_name == '') && (last_name == '')) {
    //     $("#usernamefrom").prop("disabled",true);
    //   }else {
    //     $("#usernamefrom").prop("disabled",false);
    //   }
    // });

    // My identity



    $('form[name="frm_my_identity"]').validate({
      rules: {
        full_name: {
          required: true
        },
        last_name: {
          required: true
        }
      },
      // messages: {
      //     subscribe_email: {
      //         required: "Please Enter Email-ID"
      //     }
      // },


      submitHandler: function(e) {

        var full_name = $('#full_name').val();
        var last_name = $('#last_name').val();

        $.ajax({
          url: "http://52.66.188.103/profile",
          method: 'PUT',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            full_name: full_name,
            last_name: last_name
          },
          success: function(data) {
            $("#myIdentityMessage").addClass("");
            $("#myIdentityMessage").html(data.message).show();

            setTimeout(function() {
              $("#myIdentityMessage").fadeOut("slow").html('');
            }, 2500);
            setTimeout(function() {
              location.reload(); //Refresh page
            }, 2500);


            // $(".profile-intro").removeClass("editable");
            // $(".edit__fld").removeClass("edit__mode");
            // $("#identity").hide();
            // $("#setting").show();
          }
        })
      }
    });

    $('form[name="frm_profileImage"]').submit(function(e) {
      e.preventDefault();
      var fd = new FormData();
      var files = $('#inputFileAvatar')[0].files[0];
      fd.append('profile_image', files);

      $.ajax({
        url: "http://52.66.188.103/profile/image",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
        data: fd,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
          $("#myIdentityMessage").html(data.message).show();

          setTimeout(function() {
            $("#myIdentityMessage").fadeOut("slow").html('');
            location.reload(); //Refresh page
          }, 2500);
        }
      })
    });

    // $('form[name="frm_chng_pws"]').validate({
    //   rules: {
    //     current_password: {
    //           required: true
    //       },
    //       password : {
    //               required: true,
    //               minlength : 8
    //           },
    //       password_confirm : {
    //               required: true,
    //               minlength : 8,
    //               equalTo : "#password"
    //           }
    //   },
    //   messages: {
    //     password_confirm: {
    //       equalTo: "Your passwords were mismatched."
    //     }
    //    },
    //   submitHandler: function(e) {

    //     var current_password = $('#current_password').val();
    //     var password = $('#password').val();

    //     $.ajax({
    //       url: "http://52.66.188.103/change-password",
    //       method:'patch',
    //       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //       dataType: 'json',
    //       data: {
    //         current_password: current_password,
    //         password: password
    //       },
    //       success:function(data) { 

    //         $("#myChangePwsMessage").html(data.message).show();

    //         setTimeout(function() {
    //           $("#myChangePwsMessage").fadeOut("slow").html('');
    //         }, 2500);
    //         if(data.status == "success") {
    //         setTimeout(function() 
    //           {
    //             location.reload();  //Refresh page
    //           }, 2500);
    //         }
    //       }
    //     })
    //   }
    // });

    $('form[name="frm_my_experience"]').validate({
      rules: {
        date: {
          required: true
        }
      },
      submitHandler: function(e) {
        if ($("#is_student").prop("checked") == true) {
          $("#is_student").attr('checked', 'checked')
          $("#is_student").attr('value', '1')
        } else if ($("#is_student").prop("checked") == false) {
          $("#is_student").attr('value', '0')
          $("#is_student").removeAttr("checked")
        }
        var is_student = $('#is_student').val();
        var experience = $('#date').val();




        //alert(is_student);



        $.ajax({
          url: "http://65.0.131.51/profile-add-exp.php",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            experience: experience,
            is_student: is_student,
          },
          success: function(data) {
            $("#mydateMessage").html(data.message).show();
            setTimeout(function() {
              $("#mydateMessage").fadeOut("slow").html('');
            }, 2500);
            if (data.status == "success") {
              setTimeout(function() {
                location.reload(); //Refresh page
              }, 2500);
            }
          }
        })

      }
    });
    // $('form[name="frm_chng_email"]').validate({
    //   rules: {
    //     email: {
    //           required: true,
    //           email: true
    //       },
    //   },
    //   submitHandler: function(e) {
    //     var email = $('#email').val();
    //     $.ajax({
    //       url: "http://65.0.131.51/profile-change-email.php",
    //       method:'POST',
    //       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //       dataType: 'json',
    //       data: {
    //         email: email,
    //       },
    //       success:function(data) { 
    //         $("#myemailMessage").html(data.message).show();
    //         setTimeout(function() {
    //           $("#myemailMessage").fadeOut("slow").html('');
    //         }, 2500);
    //         if(data.status == "success") {
    //         setTimeout(function() 
    //           {
    //             location.reload();  //Refresh page
    //           }, 2500);
    //         }
    //       }
    //     })
    //   }
    // });

    $('form[name="frm_my_bio"]').validate({
      rules: {
        about_me: {
          required: true,
        },
      },
      submitHandler: function(e) {
        var about_me = $('#about_me').val();
        $.ajax({
          url: "http://52.66.188.103/profile/description",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            about_me: about_me,
          },
          success: function(data) {
            $("#mybioMessage").html(data.message).show();
            setTimeout(function() {
              $("#mybioMessage").fadeOut("slow").html('');
            }, 2500);
            if (data.status == "success") {
              setTimeout(function() {
                location.reload(); //Refresh page
              }, 2500);
            }
          }
        })
      }
    });

    $('form[name="frm_chngdes"]').validate({
      rules: {
        designation: {
          required: true,
        },
        company: {
          required: true,
        },
      },
      submitHandler: function(e) {
        var designation = $('#designation').val();
        var company = $('#company').val();
        $.ajax({
          url: "http://52.66.188.103/profile/description",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            designation: designation,
            company: company,
          },
          success: function(data) {
            $("#mydesMessage").html(data.message).show();
            setTimeout(function() {
              $("#mydesMessage").fadeOut("slow").html('');
            }, 2500);
            if (data.status == "success") {
              setTimeout(function() {
                location.reload(); //Refresh page
              }, 2500);
            }
          }
        })
      }
    });

    //LinkedIn From submit



    $('form[name="frm_my_linked"]').validate({
      rules: {
        linkedin_url: {
          required: true,
        },
      },
      submitHandler: function(e) {
        var linkedin_url = $('#linkedin_url').val();
        $.ajax({
          url: "http://52.66.188.103/social/update",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            linkedin_url: linkedin_url,
          },
          success: function(data) {
            $("#mylinkedinMessage").html(data.message).show();
            setTimeout(function() {
              $("#mylinkedinMessage").fadeOut("slow").html('');
            }, 2500);
            if (data.status == "success") {
              setTimeout(function() {
                location.reload(); //Refresh page
              }, 2500);
            }
          }
        })
      }
    });

    //WebSite From Submit
    //LinkedIn From submit



    $('form[name="frm_my_website"]').validate({
      rules: {
        web_url: {
          required: true,
        },
      },
      submitHandler: function(e) {
        var web_url = $('#web_url').val();
        $.ajax({
          url: "http://52.66.188.103/social/update",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            web_url: web_url,
          },
          success: function(data) {
            $("#mywebMessage").html(data.message).show();
            setTimeout(function() {
              $("#mywebMessage").fadeOut("slow").html('');
            }, 2500);
            if (data.status == "success") {
              setTimeout(function() {
                location.reload(); //Refresh page
              }, 2500);
            }
          }
        })
      }
    });

    //User Name Show Hide



    $("#usercancel").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#identity").hide();
      $("#setting").show();
      $(".usercross").hide();
      $(".useredit").show();
      $(".user_name_wrap").removeClass("z12");
    });
    $(".useredit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#identity").show();
      $("#setting").hide();
      $(".usercross").show();
      $(".useredit").hide();
      $(".user_name_wrap").addClass("z12");
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".usercross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#identity").hide();
      $(".usercross").hide();
      $("#setting").show();
      $(".useredit").show();
      $(".user_name_wrap").removeClass("z12");
    });
    $("#identitysetting").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#identity").hide();
      $(".usercross").hide();
      $(".useredit").show();
      $("#setting").show();
      $(".user_name_wrap").removeClass("z12");
      //$(".right_panel").toggleClass("mob2");
    });

    // Education



    $('#btn_add_education').click(function() {
      $('#frm_add_education').show();
      $('#education_list').hide();
      $('#btn_add_education').hide();
      $('#frm_add_education_school').val('');
      $('#frm_add_education_degree').val('');
      $('#frm_add_education_school').val('');
    });
    $('#btn_add_education_cancel').click(function() {
      $('#frm_add_education').hide();
      $('#education_list').show();
      $('#btn_add_education').show();
    });
    $('.btn_education_remove').click(function() {
      var currentObj = $(this);
      var eduId = $(this).attr('data-edu-id');
      $.ajax({
        url: "http://52.66.188.103/education/delete",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          edu_id: eduId,
        },
        success: function(data) {
          $("#msg_education_update").html(data.message).show();

          setTimeout(function() {
            $("#msg_education_update").fadeOut("slow").html('');
          }, 2500);

          currentObj.parent().remove();

          // if(data.status == "success") {
          //   setTimeout(function() {
          //     location.reload();
          //   }, 2500);
          // }
        }
      })
    });
    $('.btn_education_edit').click(function() {
      $('#frm_add_education').show();
      $('#education_list').hide();
      $('#btn_add_education').hide();
      $('#frm_add_education_school').val($(this).attr('data-school'));
      $('#frm_add_education_degree').val($(this).attr('data-degree'));
      $('#frm_add_education_id').val($(this).attr('data-edu-id'));
    });
    $('form[name="frm_add_education"]').validate({
      rules: {
        frm_add_education_school: {
          required: true,
        },
        frm_add_education_degree: {
          required: true,
        },
      },
      submitHandler: function(e) {
        $.ajax({
          url: "http://52.66.188.103/education/save",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            edu_id: $('#frm_add_education_id').val(),
            school: $('#frm_add_education_school').val(),
            degree: $('#frm_add_education_degree').val(),
          },
          success: function(data) {
            $("#msg_education_update").html(data.message).show();

            setTimeout(function() {
              $("#msg_education_update").fadeOut("slow").html('');
            }, 2500);

            if (data.status == "success") {
              setTimeout(function() {
                location.reload();
              }, 2500);
            }
          }
        })
      }
    });




    // Privious experiance



    $('#btn_add_prvious_exp_submit').click(function() {
      $('#frm_add_prvious_exp').show();
      $('#education_list').hide();
      $('#btn_add_education').hide();
      $('#frm_add_education_school').val('');
      $('#frm_add_education_degree').val('');
      $('#frm_add_education_school').val('');
    });
    $('#btn_add_education_cancel').click(function() {
      $('#frm_add_education').hide();
      $('#education_list').show();
      $('#btn_add_education').show();
    });
    $('.btn_education_remove').click(function() {
      var currentObj = $(this);
      var eduId = $(this).attr('data-edu-id');
      $.ajax({
        url: "http://52.66.188.103/education/delete",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          edu_id: eduId,
        },
        success: function(data) {
          $("#msg_education_update").html(data.message).show();

          setTimeout(function() {
            $("#msg_education_update").fadeOut("slow").html('');
          }, 2500);

          currentObj.parent().remove();

          // if(data.status == "success") {
          //   setTimeout(function() {
          //     location.reload();
          //   }, 2500);
          // }
        }
      })
    });
    $('.btn_education_edit').click(function() {
      $('#frm_add_education').show();
      $('#education_list').hide();
      $('#btn_add_education').hide();
      $('#frm_add_education_school').val($(this).attr('data-school'));
      $('#frm_add_education_degree').val($(this).attr('data-degree'));
      $('#frm_add_education_id').val($(this).attr('data-edu-id'));
    });
    $('form[name="frm_add_education"]').validate({
      rules: {
        frm_add_education_school: {
          required: true,
        },
        frm_add_education_degree: {
          required: true,
        },
      },
      submitHandler: function(e) {
        $.ajax({
          url: "http://52.66.188.103/education/save",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            edu_id: $('#frm_add_education_id').val(),
            school: $('#frm_add_education_school').val(),
            degree: $('#frm_add_education_degree').val(),
          },
          success: function(data) {
            $("#msg_education_update").html(data.message).show();

            setTimeout(function() {
              $("#msg_education_update").fadeOut("slow").html('');
            }, 2500);

            if (data.status == "success") {
              setTimeout(function() {
                location.reload();
              }, 2500);
            }
          }
        })
      }
    });





    // Industry



    $('.industry_content_div').click(function() {
      $('.industry_content_div').removeClass('industry_selected');
      $(this).addClass('industry_selected');
      var selectedIndustryId = $(this).attr('data-id');
      var industry = $(this).attr('data-name');
      $('#industry_profile_data').html($(this).attr('data-name'));
      let formData = new FormData()
      formData.append('industry', industry)
      fetch(`http://65.0.131.51/profile-change-industry.php`, {
        method: "POST",
        body: formData
      }).then(async (result) => {
        let data = await result.text()
        console.log(data)
        location.reload();
      }).catch(err => {
        console.log("Error : ", err)
      })
    });

    //Change My Description



    $("#cncelDescription").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#changeDescription").hide();
      $("#setting").show();
      $(".desccross").hide();
      $(".descedit").show();
      $(".user_disc_wrap").removeClass("z12");
    });
    $(".descedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#changeDescription").show();
      $("#setting").hide();
      $(".desccross").show();
      $(".descedit").hide();
      $(".user_disc_wrap").addClass("z12");
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".desccross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#changeDescription").hide();
      $(".desccross").hide();
      $("#setting").show();
      $(".descedit").show();
      $(".user_disc_wrap").removeClass("z12");
    });
    $("#changeDescriptions").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#changeDescription").hide();
      $(".desccross").hide();
      $(".descedit").show();
      $("#setting").show();
      $(".user_disc_wrap").removeClass("z12");
    });

    //My interests



    $("#intrestcancel").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#interests").hide();
      $("#setting").show();
      $(".tagcross").hide();
      $(".tagedit").show();
      $("#tag").removeClass("z12");
    });
    $(".tagedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $(".tagcross").show();
      $(".tagedit").hide();
      $("#setting").hide();
      $("#interests").show();
      $("#tag").addClass("z12");
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".tagcross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#interests").hide();
      $("#setting").show();
      $(".tagcross").hide();
      $(".tagedit").show();
      $("#tag").removeClass("z12");
    });
    $("#backsetting").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#interests").hide();
      $("#setting").show();
      $(".tagcross").hide();
      $(".tagedit").show();
      $("#tag").removeClass("z12");
    });

    //Change password



    $("#changepwssetting").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#changepws").hide();
      $("#setting").show();
    });

    $("#changepwsedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $("#changepws").show();
      $("#setting").hide();
    });
    $("#cncelchange").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#changepws").hide();
      $("#setting").show();
    });

    //Change email



    $("#emailsetting").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#emailChange").hide();
      $("#setting").show();
    });

    $("#changeEmailedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $("#emailChange").show();
      $("#setting").hide();
    });
    $("#cncelemail").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#emailChange").hide();
      $("#setting").show();
    });

    //Email Notification


    $("#email_notification").click(function() {
      if ($(this).prop("checked") == true) {
        $(this).attr('checked', 'checked')
        $(this).attr('value', '2')
      } else if ($(this).prop("checked") == false) {
        $(this).attr('value', '1')
        $(this).removeAttr("checked")
      }
      var email_notification = $('#email_notification').val();


      //console.log(email_notification);


      $.ajax({
        url: "http://52.66.188.103/profile/description",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          email_notification: email_notification,
        },
        success: function(data) {
          if (data.status == "success") {
            setTimeout(function() {
              location.reload(); //Refresh page
            }, 20);
          }
        }
      })
    });



    //Newsletter



    $("#newsletter").click(function() {
      if ($(this).prop("checked") == true) {
        $(this).attr('checked', 'checked')
        $(this).attr('value', '2')
      } else if ($(this).prop("checked") == false) {
        $(this).attr('value', '1')
        $(this).removeAttr("checked")
      }
      var newsletter = $('#newsletter').val();
      $.ajax({
        url: "http://52.66.188.103/profile/description",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          newsletter: newsletter,
        },
        success: function(data) {
          if (data.status == "success") {
            setTimeout(function() {
              location.reload(); //Refresh page
            }, 20);
          }
        }
      })
    });




    //Bio



    $("#cancelbio").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#bio").hide();
      $("#setting").show();
      $(".biocross").hide();
      $(".bioedit").show();
      $(".bio").removeClass("z12");
    });
    $(".bioedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#bio").show();
      $("#setting").hide();
      $(".biocross").show();
      $(".bioedit").hide();
      $(".profile-content.bio_wrap").addClass("z12");
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".biocross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#bio").hide();
      $(".biocross").hide();
      $("#setting").show();
      $(".bioedit").show();
      $(".profile-content.bio_wrap").removeClass("z12");
    });
    $("#backbio").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#bio").hide();
      $(".biocross").hide();
      $(".bioedit").show();
      $("#setting").show();
      $(".bio").removeClass("z12");
    });



    //Goles



    $("#cancelgoal").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#goal").hide();
      $("#setting").show();
      $(".goalcross").hide();
      $(".goaledit").show();
      $(".goals").removeClass("z12");
    });
    $(".goaledit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#goal").show();
      $("#setting").hide();
      $(".goalcross").show();
      $(".goaledit").hide();
      $(".goals").addClass("z12");
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
      $(".profile-content.goal_wrap").addClass("z12");
    });
    $(".goalcross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#goal").hide();
      $(".goalcross").hide();
      $("#setting").show();
      $(".goaledit").show();
      $(".goals").removeClass("z12");
      $(".profile-content.goal_wrap").removeClass("z12");
    });
    $("#backgoal").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#goal").hide();
      $(".goalcross").hide();
      $(".goaledit").show();
      $("#setting").show();
      $(".goals").removeClass("z12");
    });




    //Profile Image Canvas



    $("#cncelprofileImage").click(function() {
      $("#setting").show();
      $("#profileImage").hide();
      $(".avatarcross").hide();
      $(".avataredit").show();
    });
    $("#inputFileAvatar").click(function() {
      $("#setting").hide();
      $("#profileImage").show();
      $(".avatarcross").show();
      $(".avataredit").hide();
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $("#changeprofileImage").click(function() {
      $("#setting").show();
      $("#profileImage").hide();
      $(".avatarcross").hide();
      $(".avataredit").show();
    });




    //Experience




    $("#cancelexperience").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#experience").hide();
      $("#setting").show();
      $(".experiencecross").hide();
      $(".experienceedit").show();
    });
    $(".experienceedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#experience").show();
      $("#setting").hide();
      $(".experiencecross").show();
      $(".experienceedit").hide();
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".experiencecross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#experience").hide();
      $(".experiencecross").hide();
      $("#setting").show();
      $(".experienceedit").show();
    });
    $("#backexperience").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#experience").hide();
      $(".experiencecross").hide();
      $(".experienceedit").show();
      $("#setting").show();
    });




    //Industry




    $("#cancelindustry").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#industry").hide();
      $("#setting").show();
      $(".industrycross").hide();
      $(".industryedit").show();
    });
    $(".industryedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#industry").show();
      $("#setting").hide();
      $(".industrycross").show();
      $(".industryedit").hide();
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".industrycross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#industry").hide();
      $(".industrycross").hide();
      $("#setting").show();
      $(".industryedit").show();
    });
    $("#backindustry").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#industry").hide();
      $(".industrycross").hide();
      $(".industryedit").show();
      $("#setting").show();
    });




    //Education




    $("#canceleducation").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#education").hide();
      $("#setting").show();
      $(".educationcross").hide();
      $(".educationedit").show();
    });
    $(".educationedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#education").show();
      $("#setting").hide();
      $("#education").show();
      $("#education_list").show();
      $("#btn_add_education").show();
      $(".educationcross").show();
      $(".educationedit").hide();
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".educationcross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#education").hide();
      $("#frm_add_education").hide();
      $(".educationcross").hide();
      $("#setting").show();
      $(".educationedit").show();
    });
    $("#backeducation").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#education").hide();
      $(".educationcross").hide();
      $(".educationedit").show();
      $("#setting").show();
      $("#frm_add_education").hide();
    });


    // privious exp
    $('#btn_add_prvious_exp').click(function() {
      $('#frm_add_prvious_exp').show();
      $('#prvious_exp_list').hide();
      $('#btn_add_prvious_exp').hide();
      $('#frm_add_prvious_exp_position').val('');
      $('#frm_add_prvious_exp_degree').val('');
      $('#frm_add_prvious_exp_organization').val('');
    });
    $('#btn_add_prvious_exp_cancel').click(function() {
      $('#frm_add_prvious_exp').hide();
      $('#prvious_exp_list').show();
      $('#btn_add_prvious_exp').show();
    });


    $("#cancelprvious_exp").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#prvious_exp").hide();
      $("#setting").show();
      $(".exp_cross").hide();
      $(".exp_edit").show();
    });
    $(".exp_edit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#prvious_exp").show();
      $("#setting").hide();
      $("#prvious_exp").show();
      $("#prvious_exp_list").show();
      $("#btn_add_prvious_exp").show();
      $(".exp_cross").show();
      $(".exp_edit").hide();
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".exp_cross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#prvious_exp").hide();
      $("#frm_add_prvious_exp").hide();
      $(".exp_cross").hide();
      $("#setting").show();
      $(".exp_edit").show();
    });
    $("#backprvious_exp").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#prvious_exp").hide();
      $(".exp_cross").hide();
      $(".exp_edit").show();
      $("#setting").show();
      $("#frm_add_prvious_exp").hide();
    });

    //Previous




    $("#cancelprevious").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#previous").hide();
      $("#setting").show();
      $(".previouscross").hide();
      $(".previousedit").show();
    });
    $(".previousedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#previous").show();
      $("#setting").hide();
      $(".previouscross").show();
      $(".previousedit").hide();
    });
    $(".previouscross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#previous").hide();
      $(".previouscross").hide();
      $("#setting").show();
      $(".previousedit").show();
    });
    $("#backprevious").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#previous").hide();
      $(".previouscross").hide();
      $(".previousedit").show();
      $("#setting").show();
    });




    //linked




    $("#cancellinked").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#linked").hide();
      $("#setting").show();
      $(".linkedcross").hide();
      $(".linkededit").show();
      $("#linkdclass").removeClass("z12");
    });
    $(".linkededit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#linked").show();
      $("#setting").hide();
      $(".linkedcross").show();
      $(".linkededit").hide();
      $("#linkdclass").addClass("z12");
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".linkedcross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#linked").hide();
      $(".linkedcross").hide();
      $("#setting").show();
      $(".linkededit").show();
      $("#linkdclass").removeClass("z12");
    });
    $("#backlinked").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#linked").hide();
      $(".linkedcross").hide();
      $(".linkededit").show();
      $("#setting").show();
      $("#linkdclass").removeClass("z12");
    });






    //website



    $("#cancelwebsite").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#website").hide();
      $("#setting").show();
      $(".websitecross").hide();
      $(".websiteedit").show();
      $("#webclass").removeClass("z12");
    });
    $(".websiteedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#website").show();
      $("#setting").hide();
      $(".websitecross").show();
      $(".websiteedit").hide();
      $("#webclass").addClass("z12");
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
    });
    $(".websitecross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#website").hide();
      $(".websitecross").hide();
      $("#setting").show();
      $(".websiteedit").show();
      $("#webclass").removeClass("z12");
    });
    $("#backwebsite").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#website").hide();
      $(".websitecross").hide();
      $(".websiteedit").show();
      $("#setting").show();
      $("#webclass").removeClass("z12");
    });





    //twitter




    $("#canceltwitter").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#twitter").hide();
      $("#setting").show();
      $(".twittercross").hide();
      $(".twitteredit").show();
    });
    $(".twitteredit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#twitter").show();
      $("#setting").hide();
      $(".twittercross").show();
      $(".twitteredit").hide();
    });
    $(".twittercross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#twitter").hide();
      $(".twittercross").hide();
      $("#setting").show();
      $(".twitteredit").show();
    });
    $("#backtwitter").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#twitter").hide();
      $(".twittercross").hide();
      $(".twitteredit").show();
      $("#setting").show();
    });





    //instagram




    $("#cancelinstagram").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#instagram").hide();
      $("#setting").show();
      $(".instagramcross").hide();
      $(".instagramedit").show();
    });
    $(".instagramedit").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#instagram").show();
      $("#setting").hide();
      $(".instagramcross").show();
      $(".instagramedit").hide();
    });
    $(".instagramcross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#instagram").hide();
      $(".instagramcross").hide();
      $("#setting").show();
      $(".instagramedit").show();
    });
    $("#backinstagram").click(function() {
      $(".profile-intro").removeClass("editable");
      $(".edit__fld").removeClass("edit__mode");
      $("#instagram").hide();
      $(".instagramcross").hide();
      $(".instagramedit").show();
      $("#setting").show();
    });

    $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    $(".toggle-password1").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle1"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    $(".toggle-password2").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });





    //  right panel toggle




    $('.avt_ico').click(function() {
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob2');
      $('.left_panel').removeClass('mob2');
    });
    $('.jss106').click(function() {
      //$('#profile-middle').show();
      $('#mobile-set').show();
      // $('.slider').toggleClass('mob');
      // $('.right_panel').toggleClass('mob2');

    });
    $('.comp_logo').click(function() {
      $('.slider').toggleClass('mob2');
      $('.left_panel').toggleClass('mob2');
      $('.right_panel').removeClass('mob2');
      //$('.right_panel').toggleClass('mob2');
    });

    let keyword = getParameterByName('action');
    if (typeof keyword == 'string' && keyword == 'setting') {
      $('#profile-middle').hide();
      $('#mobile-set').show();
    }

  });

  function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }
</script>





<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // pro popup



    $('#membershipUpgradeButton2').click(function() {
      $('#membershipUpgradeModal').modal('show');
    });
    $('#membershipUpgradeButton').click(function() {
      $('#membershipUpgradeModal').modal('show');
    });

    $('#mblUpgrade').click(function() {
      $('#membershipUpgradeModal').modal('show');
    });

    $('#membershipUpgradeButtonMobile').click(function() {
      $('#membershipUpgradeModal').modal('show');
    });

    $("#membershipUpgradeModal").on('hide.bs.modal', function() {
      window.location.reload();
    });

    $('.pro__plan').click(function(e) {
      e.preventDefault();

      $('#membership_buy_details_amount').html('INR ' + $(this).attr('package-amount'));
      $('#membership_buy_details_name').html($(this).attr('package-name'));

      $('form[name=razorpayform] [name="membership_id"]').val($(this).attr('data-id'));
      $('#membership_buy_package').val($(this).attr('data-id'));
      $('#membership_packages_buy_btn').removeAttr('disabled');
      $('.pro__plan').removeClass('active');
      $(this).addClass('active');
    });

    $('#membership_packages_buy_btn').click(function(e) {
      e.preventDefault();
      $('#membership_buy_packages').hide();
      $('#membership_buy_details').show();
    });
    $('#Frinlist').click(function(e) {
      e.preventDefault();
      $('.friendRequest').hide();
      $('.friendList').show();
    });
    $('#FrinRequest').click(function(e) {
      e.preventDefault();
      $('.friendList').hide();
      $('.friendRequest').show();
    });
    $('#membership_buy_pay').click(function(e) {
      e.preventDefault();

      $.ajax({
        url: "http://52.66.188.103/razor/pay",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          membership_id: $('#membership_buy_package').val()
        },
        success: function(data) {
          // Checkout details as a json
          var options = data;

          /**
           * The entire list of Checkout fields is available at
           * https://docs.razorpay.com/docs/checkout-form#checkout-fields
           */
          options.handler = function(response) {
            document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
            document.getElementById('razorpay_signature').value = response.razorpay_signature;
            document.razorpayform.submit();
          };

          // Boolean whether to show image inside a white frame. (default: true)
          options.theme.image_padding = false;

          options.modal = {
            ondismiss: function() {
              console.log("This code runs when the popup is closed");
            },
            // Boolean indicating whether pressing escape key 
            // should close the checkout form. (default: true)
            escape: true,
            // Boolean indicating whether clicking translucent blank
            // space outside checkout form should close the form. (default: false)
            backdropclose: false
          };

          var rzp = new Razorpay(options);
          // document.getElementById('rzp-button1').onclick = function(e){
          rzp.open();
          // e.preventDefault();
          // }
        }
      })
    });
    // upgrade button
    // $('#membership_packages_buy_btn').click(function(e){
    //   e.preventDefault();
    //   $('#membership_buy_packages').hide();
    //   $('#membership_buy_details').show();
    // });
  });
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  function friendRequestAction(id, action) {
    var actions = action;
    var frind = id;
    $.ajax({
      url: "http://52.66.188.103/action/friend/request",
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      dataType: 'json',
      data: {
        id: frind,
        action: actions,
      },
      success: function(data) {
        if (data.status == "success") {
          console.log(data.message);
          setTimeout(function() {
            location.reload(); //Refresh page
          }, 200);
        }
      }
    })
  }

  $(function() {
    var APP_URL = "http:\/\/52.66.188.103"
    $("#keyword").autocomplete({
        minLength: 0,
        source: function(request, response) {
          var keywordvalue = $('#keyword').val();
          $.ajax({
            type: 'POST',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "http://52.66.188.103/action/search/autocomplete",
            data: {
              term: request.term
            },
            dataType: "json",
            success: function(data) {
              response(data);
            }
          });
        },
        // focus: function( event, ui ) {
        //   $( "#project" ).val( ui.item.label );
        //   return false;
        // },
        select: function(event, ui) {
          location.href = APP_URL + "/result/member/" + ui.item.id;
          return false;
        }
      })
      .autocomplete("instance")._renderItem = function(ul, item) {
        var profileImage = item.profile_image;
        if (profileImage == '' || (profileImage) == null) {
          profileImage = APP_URL + '/assets/images/default-user.jpg';
        } else {
          profileImage = APP_URL + '/storage/profile/' + profileImage;
        }
        return $("<li>")
          .append('<div><img style="width: 50px;" src="' + profileImage + '"/>' + item.full_name + " " + (item.last_name ? item.last_name : '') + "<br>" + (item.designation ? item.designation : '') + "</div>")
          .appendTo(ul);
      };
  });
</script>
</body>
<!--end:: Body -->

</html>