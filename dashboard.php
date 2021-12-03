<?php

session_start();

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
  <title>Dashboard | Vkonex-connectin</title>
  <meta name="description" content="Vkonex-connectin">
  <meta name="csrf-token" content="QiNYCI0Fni60mgD1OEtVVQvXxWXJEF66pqjaCRs3">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <link href="/themes/geoconnectin/images/favicon.icon" rel='shortcut icon'>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>




  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  <link rel="stylesheet" href="slider/css/style.css">
  <script src="slider/js/script.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="themes/geoconnectin/assets/css/style.css">
  <link rel="stylesheet" href="themes/geoconnectin/assets/css/custom.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/style.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/custom.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="http://dev.geoconnectin.com/themes/geoconnectin/assets/css/member-chat.css" />


  <style>
    .chat .outgoing .details {

      padding: 15px 20px;
      background: white;
      margin: 5px 0px;
      border-radius: 50px;
      display: inline-block;
      font-weight: bold;

    }
  </style>

  <!-- NO -->

  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="themes/adminlte/bower_components/jvectormap/jquery-jvectormap.css">

  <link rel="stylesheet" href="/slider/css/jTinder.css?v=1629865844"> -->
  <!-- <link rel="stylesheet" href="http://dev.geoconnectin.com/themes/adminlte/bower_components/jvectormap/jquery-jvectormap.css"> -->

  <link rel="stylesheet" href="/slider/css/jTinder.css?v=1630574484">

  <style>
    .wrap {
      height: 600px;
    }
  </style>




  <!-- NO -->
</head>
<!--end:: Head -->

<!--begin:: Body -->
<?php

require_once('dashboard_header.php');

?>
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
                          <a aria-current="page" class="active prof avt_ico" test-id="user-menu-link-to-my-profile" href="/profile" >
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
      <div id="chat-base" class="slider profile__view_wrap" style="height:100vh;">
        <!-- begin slider -->
        <!-- <div id="tinderslide" class="custom-tinder-slide">

          </div> -->
        <?php
        if (isset($_GET['chat'])) {
          $chat_id = $_GET['chat'];
          $db = mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');
          $friend_query = 'SELECT * FROM `connectin_users` WHERE c_u_id=' . $chat_id;
          $friend_result = mysqli_query($db, $friend_query);
          $friend_row = mysqli_fetch_array($friend_result);

        ?>
          <!-- tinder slider -->
          <div class="tinder loaded">
            <div class="chatHead">
              <ul class="list-inline">
                <li class="list-inline-item hide-on-desktop"><a href="/member/Friendlist/5"><button class="MuiButtonBase-root jss106 no-background" tabindex="0" type="button" id="backsetting">
                      <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107 white-color" style="fill: #850d71">
                        <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z">
                        </path>
                      </svg>
                    </button></a></li>
                <li class="list-inline-item">
                  <div class="profilePic">
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($friend_row['profilepic']); ?>" width="30" height="30" class=" img-responsive ">
                  </div>
                </li>
                <li class="list-inline-item">
                  <p class="userName">
                    <?php echo $friend_row['username']; ?> </p>
                </li>
                <li id="right-side-custom" class="list-inline-item right-rotate-btn hide-on-desktop"><button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backsetting">
                    <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107 rotate-btn" style="fill: #850d71">
                      <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z">
                      </path>
                    </svg>
                  </button></li>
              </ul>
            </div>



            <div id="chat_box_6" class="chat_box chat-opened" data-id="6">
              <div class="row">
                <div class="col-xs-12 col-md-12">
                  <div class="panel panel-default">

                    <div class="panel-body chat-area" id="chat-area" data-id="<?php echo $chat_id; ?>" style="display:flex;flex-direction:column;overflow-y:scroll;">
                    </div>
                    <div class="panel-footer">
                      <div class="input-group form-controls commentBox">
                        <input type="file" id="file" hidden />
                        <input type="text" id="incomming_id-text" value="<?php echo $chat_id; ?>" hidden>
                        <textarea id="message-text" class="form-control chat_input" placeholder="Write your message here..."></textarea>
                        <span class="input-group-btn">

                          <button onclick="sentmessage(event)" class="btn-chat" type="button" data-to-user="6">
                            <i class="fa fa-send"></i>
                          </button>
                        </span>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" id="to_user_id" value="6" />
            </div>
            <input type="hidden" id="current_user" value="5" />
            <input type="hidden" id="pusher_app_key" value="0a74f771881bebd369d0" />
            <input type="hidden" id="pusher_cluster" value="ap2" />

            <div id="chat-overlay" class="row"></div>

            <audio id="chat-alert-sound" style="display: none">
              <source src="/themes/geoconnectin/assets/sound/facebook_chat.mp3" />
            </audio>

          </div>
          <script>
            setInterval(() => {
              let chatBox = document.getElementById('chat-area');
              let incoming_id = chatBox.dataset.id
              let formData = new FormData();
              formData.append("incoming_id", incoming_id);
              fetch("/chat/php/get-chat.php", {
                  method: "POST",
                  body: formData,
                })
                .then((res) => res.text())
                .then((data) => {
                  chatBox.innerHTML = data
                })
                .catch((err) => {
                  console.log(err);
                });
            }, 1000)

            function sentmessage() {
              let incomming_id = Number(document.getElementById('incomming_id-text').value)
              let message = document.getElementById('message-text').value
              let file = document.getElementById('file').files[0]
              let formData = new FormData();
              formData.append('incoming_id', incomming_id)
              formData.append('message', message)
              if (file) {
                formData.append('file', file)
              }
              fetch("/chat/php/insert-chat.php", {
                  method: "POST",
                  body: formData,
                })
                .then((res) => res.text())
                .then((data) => {
                  console.log(data)
                  document.getElementById('message-text').value = ""
                })
                .catch((err) => {
                  console.log(err);
                });
            }
          </script>
          <!-- /tinder slider -->

        <?php
        } else {
        ?>
          <div class="wrap" id="wrap">
            <div id="tinderslide" class="custom-tinder-slide">
              <?php
              $db = mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');
              $user_query = 'SELECT * FROM `connectin_users` WHERE username=' . $_SESSION['username'] . '';
              $user_result = mysqli_query($db, $user_query);
              $user_row = mysqli_fetch_array($user_result);





              $user_interest_query = 'SELECT * FROM interests INNER JOIN connectin_users ON interests.c_u_id=connectin_users.c_u_id WHERE username="' . $_SESSION['username'] . '"';
              $result_interest = mysqli_query($db, $user_interest_query);
              $user_goal_query = 'SELECT * FROM goals INNER JOIN connectin_users ON goals.c_u_id=connectin_users.c_u_id WHERE username="' . $_SESSION['username'] . '"';
              $result_goal = mysqli_query($db, $user_goal_query);
              $sql = "SELECT connectin_users.c_u_id AS c_u_id,username,email,mobile,d_title,organization,location,bio,industry,status,profilepic FROM interests INNER JOIN connectin_users ON interests.c_u_id=connectin_users.c_u_id WHERE ";
              $i = 0;
              while ($row = mysqli_fetch_array($result_interest)) {
                if ($i != 0) {
                  $sql .= " OR ";
                }
                $sql .= "interest LIKE '%" . $row['interest'] . "%'";
                $i = 1;
              }
              $sql .= " UNION ";
              // while($row = mysqli_fetch_array($result_goal)){
              //     $sql .= " OR goal LIKE '%".$row['goal']."%'";
              // }
              $sql .= "SELECT connectin_users.c_u_id,username,email,mobile,d_title,organization,location,bio,industry,status,profilepic FROM goals INNER JOIN connectin_users ON goals.c_u_id=connectin_users.c_u_id WHERE ";
              $i = 0;
              while ($row = mysqli_fetch_array($result_goal)) {
                if ($i != 0) {
                  $sql .= " OR ";
                }
                $sql .= "goal LIKE '%" . $row['goal'] . "%'";
                $i = 1;
              }
              $result = mysqli_query($db, $sql);


              ?>
              <p></p>
              <ul>
                <?php
                if (isset($_GET['req'])) {
                  $req_id = $_GET['req'];
                  $sql4 = "SELECT R_id,user,friend,username,d_title,organization,profilepic,location,industry FROM requests INNER JOIN connectin_users ON requests.user=connectin_users.c_u_id WHERE R_id=$req_id";
                  $result4 = mysqli_query($db, $sql4);
                  $req = mysqli_fetch_assoc($result4);
                ?>
                  <li class="pane1" data-id="1">
                    <div class="tinder--card tinder-desc tin_dashboard profile-intro" id="showroom">
                      <input class="hideid" type="hidden" value="1" />
                      <div class="head_image">
                        <div class="overlay" style="background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($req['profilepic']); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
                          <div class="card-image">
                            <div>
                              <div class="card-image-wrapper settings__icon-edit undefined" test-id="profile-card-avatar" style="text-align: center;"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($req['profilepic']); ?>" class="user-avatar modal__avatar size-110 pointer"></div>
                            </div>

                            <div class="user-detail">
                              <h2 class="edit__fld user-name settings__icon-edit icon--white"><?php echo $req['username']; ?></h2>
                              <p class="user-description settings__icon-edit icon--white">
                                <span id="1"><?php echo $req['d_title']; ?></span>
                                <span>&nbsp;at&nbsp;<?php echo $req['organization']; ?></span>
                              </p>
                            </div>

                            <div class="location"><i class="icon-shapr icon-shapr-Pin "></i><?php echo $req['location']; ?>
                            </div>
                          </div>
                        </div>

                        <div class="head_detail_wrap">
                          <div class="profile-content profile-interest settings__icon-edit">
                            <div class="interests">
                              <?php
                              $sql5 = 'SELECT * FROM interests WHERE c_u_id=' . $req['user'];
                              $result5 = mysqli_query($db, $sql5);
                              while ($row5 = mysqli_fetch_assoc($result5)) {
                              ?>
                                <div class="interest false tinder-interest-custom"><?php echo $row5['interest']; ?></div>
                              <?php } ?>
                            </div>
                          </div>

                          <div class="profile-content custom-pro-head">
                            <h2><span>Current goals</span></h2>
                            <div class="goals ">
                              <?php
                              $sql5 = 'SELECT * FROM goals WHERE c_u_id=' . $req['user'];
                              $result5 = mysqli_query($db, $sql5);
                              while ($row5 = mysqli_fetch_assoc($result5)) {
                              ?>
                                <div class="goal tinder-interest-custom"><span><?php echo $row5['goal']; ?></span></div>

                              <?php } ?>
                            </div>
                            <div class="bio  settings__icon--center">

                              <div class="card-text">
                                <p style="word-break: break-word;"><span class="Linkify">About my bio</p>
                              </div>
                            </div>
                          </div>

                          <div class="profile-content profile-details">
                            <div class="experience settings__icon--wrap">


                              <div class="jss167 custom-common">
                                <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 16 15" class="jss164">
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
                                  </svg><span>Experience</span></h3>
                                <?php

                                $sql5 = 'SELECT * FROM `connectin_users` WHERE c_u_id=' . $req['user'];

                                $result5 = mysqli_query($db, $sql5);
                                while ($row5 = mysqli_fetch_assoc($result5)) {
                                ?>

                                  <span><?php  date_default_timezone_set('Asia/Kolkata');
                            $data = date("Y-m-d");
                           
                            $date1 = strtotime($row5['experience']);
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

                            ); ?></span><br />
                                <?php } ?>
                              </div>


                            </div>
                          </div>

                          <div class="profile-content profile-details">
                            <div class="industry settings__icon--wrap">


                              <div class="jss167 custom-common">
                                <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                    <path d="M31.4 11.6c-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.8v-2.7c0-.5-.2-.9-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.5 3.7v-2.7c0-.4-.2-.8-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.2v2.8l5.7-2.9v2.8c0 .5.2.9.6 1.1.2.1.4.2.6.2s.4-.1.6-.2l6.5-3.7v2.7c0 .7.6 1.3 1.3 1.3.2 0 .4-.1.6-.2l6.4-3.8V26c0 .1-.1.3-.3.3h-22v2.6h22.1c1.5 0 2.7-1.2 2.7-2.8V12.6c-.1-.4-.3-.8-.7-1zM8.9 5.9c2.3.4 3.4.5 4.4.1 2.3-1 1.8-3.4 1.3-2.9-1.1.9-2.5 1.5-4.1 1.5-.6 0-1.1-.1-1.6-.2C7 4 6.4 5 6.4 5c-.4.5.2 1.1.7 1.1.4-.1.9-.2 1.4-.2h.4c.1 0 0 0 0 0zM2.9 5.1h-.1C1.4 5.1.3 6.2.3 7.6L0 27.3v.1c0 .8.7 1.5 1.5 1.5h4.2L5.5 7.6c-.1-1.4-1.2-2.5-2.6-2.5z"></path>
                                    <path d="M24.7 20.1h1.6c.5 0 1 .4 1 1v1.6c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.6c0-.6.5-1 1-1zM9.6 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1H9.6c-.5 0-1-.4-1-1v-1.7c0-.6.5-1 1-1zM17.2 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.7c0-.6.4-1 1-1z"></path>
                                  </svg><span>Industry</span></h3>
                                <span><?php echo $req['industry']; ?></span>
                              </div>

                            </div>
                          </div>



                          <div class="profile-content profile-details">
                            <div class="education settings__icon--wrap">


                              <div class="jss167 custom-common">
                                <h3 class="jss165"> <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                    <path d="M5.824 16.944v4.784c.16 3.808 4.64 6.88 10.176 6.88s10.016-3.056 10.16-6.88v-4.8L16 23.04z"></path>
                                    <path d="M16 2.72L0 11.424l16 8.704 13.088-7.12V23.04H32V11.424L16 2.72z"></path>
                                  </svg><span>Education</span></h3>
                                <?php

                                $query = 'SELECT * FROM `education`WHERE c_u_id =' . $req['user'];
                                $result2 = mysqli_query($db, $query);
                                while ($row2 = mysqli_fetch_array($result2)) {
                                ?>

                                  <div class="jss199">
                                    <h4 class="jss200"><?php echo $row2['school']; ?></h4>
                                    <h4 class="jss201"> <?php echo $row2['degree']; ?></h4>
                                  </div>
                                <?php } ?>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="like"></div>
                      <div class="dislike"></div>

                    <?php
                  } else {
                    ?>
                      <?php

                      while ($row = mysqli_fetch_array($result)) {
                        if($row['username'] == $_SESSION['username']){
                          continue;
                        }
                      ?>


                  <li class="pane1" data-id="<?php echo $row['c_u_id'] ?>" data-user="<?php echo $_SESSION['id'] ?>">
                    <div class="tinder--card tinder-desc tin_dashboard profile-intro" id="showroom">
                      <input class="hideid" type="hidden" value="1" />
                      <div class="head_image">
                        <div class="overlay" style="background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['profilepic']); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="card-image">
                          <div>
                            <div class="card-image-wrapper settings__icon-edit undefined" test-id="profile-card-avatar" style="text-align: center;"><img id="<?php echo $row['username']; ?>" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['profilepic']); ?>" class="user-avatar modal__avatar size-110 pointer"></div>
                          </div>

                          <div class="user-detail">
                            <h2 class="edit__fld user-name settings__icon-edit icon--white"><?php echo $row['username']; ?></h2>
                            <p class="user-description settings__icon-edit icon--white">
                              <span id="1"><?php echo $row['d_title']; ?></span>
                              <span>&nbsp;at&nbsp;<?php echo $row['organization']; ?></span>
                            </p>
                          </div>

                          <div class="location"><i class="icon-shapr icon-shapr-Pin "></i><?php echo $row['location']; ?>
                          </div>
                        </div>
                      </div>

                      <div class="head_detail_wrap">
                        <div class="profile-content profile-interest settings__icon-edit">
                          <div class="interests">
                            <?php
                            $ID = $row['c_u_id'];
                            $query = "SELECT * FROM `interests`WHERE c_u_id=$ID";
                            $result2 = mysqli_query($db, $query);
                            while ($row2 = mysqli_fetch_array($result2)) {
                            ?>

                              <div class="interest false tinder-interest-custom"><?php echo $row2['interest']; ?></div>
                            <?php } ?>
                          </div>
                        </div>

                        <div class="profile-content custom-pro-head">
                          <h2><span>Current goals</span></h2>
                          <div class="goals ">
                            <?php
                            $ID = $row['c_u_id'];
                            $query = "SELECT * FROM `goals`WHERE c_u_id = $ID ";
                            $result2 = mysqli_query($db, $query);
                            while ($row2 = mysqli_fetch_array($result2)) {
                            ?>
                              <div class="goal tinder-interest-custom"><span><?php echo $row2['goal']; ?></span></div>
                            <?php } ?>
                          </div>
                          <div class="bio  settings__icon--center">

                            <div class="card-text">
                              <p style="word-break: break-word;"><span class="Linkify">About my bio</p>
                            </div>
                          </div>
                        </div>

                        <div class="profile-content profile-details">
                          <div class="experience settings__icon--wrap">


                            <div class="jss167 custom-common">
                              <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 16 15" class="jss164">
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
                                </svg><span>Experience</span></h3>
                              <?php
                              $ID = $row['c_u_id'];
                              $query = "SELECT * FROM `connectin_users` WHERE c_u_id=$ID";
                              $result2 = mysqli_query($db, $query);
                              while ($row2 = mysqli_fetch_array($result2)) {
                              ?>

                                <span><?php  date_default_timezone_set('Asia/Kolkata');
                            $data = date("Y-m-d");
                           
                            $date1 = strtotime($row2['experience']);
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

                            ); ?></span><br />
                              <?php } ?>
                            </div>


                          </div>
                        </div>

                        <div class="profile-content profile-details">
                          <div class="industry settings__icon--wrap">


                            <div class="jss167 custom-common">
                              <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                  <path d="M31.4 11.6c-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.8v-2.7c0-.5-.2-.9-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.5 3.7v-2.7c0-.4-.2-.8-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.2v2.8l5.7-2.9v2.8c0 .5.2.9.6 1.1.2.1.4.2.6.2s.4-.1.6-.2l6.5-3.7v2.7c0 .7.6 1.3 1.3 1.3.2 0 .4-.1.6-.2l6.4-3.8V26c0 .1-.1.3-.3.3h-22v2.6h22.1c1.5 0 2.7-1.2 2.7-2.8V12.6c-.1-.4-.3-.8-.7-1zM8.9 5.9c2.3.4 3.4.5 4.4.1 2.3-1 1.8-3.4 1.3-2.9-1.1.9-2.5 1.5-4.1 1.5-.6 0-1.1-.1-1.6-.2C7 4 6.4 5 6.4 5c-.4.5.2 1.1.7 1.1.4-.1.9-.2 1.4-.2h.4c.1 0 0 0 0 0zM2.9 5.1h-.1C1.4 5.1.3 6.2.3 7.6L0 27.3v.1c0 .8.7 1.5 1.5 1.5h4.2L5.5 7.6c-.1-1.4-1.2-2.5-2.6-2.5z"></path>
                                  <path d="M24.7 20.1h1.6c.5 0 1 .4 1 1v1.6c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.6c0-.6.5-1 1-1zM9.6 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1H9.6c-.5 0-1-.4-1-1v-1.7c0-.6.5-1 1-1zM17.2 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.7c0-.6.4-1 1-1z"></path>
                                </svg><span>Industry</span></h3>
                              <span><?php echo $row['industry']; ?></span>
                            </div>

                          </div>
                        </div>



                        <div class="profile-content profile-details">
                          <div class="education settings__icon--wrap">


                            <div class="jss167 custom-common">
                              <h3 class="jss165"> <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                  <path d="M5.824 16.944v4.784c.16 3.808 4.64 6.88 10.176 6.88s10.016-3.056 10.16-6.88v-4.8L16 23.04z"></path>
                                  <path d="M16 2.72L0 11.424l16 8.704 13.088-7.12V23.04H32V11.424L16 2.72z"></path>
                                </svg><span>Education</span></h3>
                              <?php
                              $ID = $row['c_u_id'];
                              $query = "SELECT * FROM `education`WHERE c_u_id = $ID ";
                              $result2 = mysqli_query($db, $query);
                              while ($row2 = mysqli_fetch_array($result2)) {
                              ?>

                                <div class="jss199">
                                  <h4 class="jss200"><?php echo $row2['school']; ?></h4>
                                  <h4 class="jss201"> <?php echo $row2['degree']; ?></h4>
                                </div>
                              <?php } ?>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="like" id="like"></div>
                    <div class="dislike" id="dislike"></div>
                  </li>

                <?php } ?>
              <?php } ?>
              </ul>
            </div>
          </div>

          <!-- end slider -->
          <?php
          if (isset($_GET['req'])) {
            $req_id = $_GET['req'];
          ?>
            <div class="actions" id="">
              <a href="#" class="dislike"><i></i></a>
              <a id="accept" href="accept-request.php?id=<?php echo $req_id; ?>" class="like"><i></i></a>
            </div>
            <script>
              let accept = document.getElementById('accept')
              accept.onclick = () => {
                location.href = "accept-request.php?id=<?php echo $req_id; ?>"
              }
            </script>
          <?php } else { ?>

            <div class="actions" id="actions">
              <a href="#" class="dislike"><i></i></a>
              <a href="#" class="like"><i></i></a>
            </div>
          <?php } ?>
          <!-- jTinder status text  -->
          <div id="status"></div>
        <?php } ?>
      </div>

      <div class="right_panel geo__dashboard">
       <?php
       if (!isset($_GET['chat'])) {
       ?>
       <div class="geo__advert"><img src="ad.png" class="img-fluid" /></div> 
       <?php } ?>
        <?php
        if (isset($_GET['chat'])) {
          $chat_id = $_GET['chat'];
          $db = mysqli_connect('vkonex.cbaonvzb17ll.ap-south-1.rds.amazonaws.com', 'admin', 'Admin306', 'vkonex_ai');
          $friend_query = 'SELECT * FROM `connectin_users` WHERE c_u_id=' . $chat_id;
          $friend_result = mysqli_query($db, $friend_query);
          $friend_row = mysqli_fetch_array($friend_result);
        ?>
          <div class="pane1" data-id="<?php echo $friend_row['c_u_id'] ?>" data-user="<?php echo $_SESSION['id'] ?>">
                    <div class="tinder--card tinder-desc tin_dashboard profile-intro" id="showroom">
                      <input class="hideid" type="hidden" value="1" />
                      <div class="head_image">
                        <div class="overlay" style="background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($friend_row['profilepic']); ?>'); background-position: center center; background-size: cover; background-repeat: no-repeat;"></div>
                        <div class="card-image">
                          <div>
                            <div class="card-image-wrapper settings__icon-edit undefined" test-id="profile-card-avatar" style="text-align: center;"><img id="<?php echo $friend_row['username']; ?>" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($friend_row['profilepic']); ?>" class="user-avatar modal__avatar size-110 pointer"></div>
                          </div>

                          <div class="user-detail">
                            <h2 class="edit__fld user-name settings__icon-edit icon--white"><?php echo $friend_row['username']; ?></h2>
                            <p class="user-description settings__icon-edit icon--white">
                              <span id="1"><?php echo $friend_row['d_title']; ?></span>
                              <span>&nbsp;at&nbsp;<?php echo $friend_row['organization']; ?></span>
                            </p>
                          </div>

                          <div class="location"><i class="icon-shapr icon-shapr-Pin "></i><?php echo $friend_row['location']; ?>
                          </div>
                        </div>
                      </div>

                      <div class="head_detail_wrap">
                        <div class="profile-content profile-interest settings__icon-edit">
                          <div class="interests">
                            <?php
                            $ID = $friend_row['c_u_id'];
                            $query = "SELECT * FROM `interests`WHERE c_u_id=$ID";
                            $result2 = mysqli_query($db, $query);
                            while ($row2 = mysqli_fetch_array($result2)) {
                            ?>

                              <div class="interest false tinder-interest-custom"><?php echo $row2['interest']; ?></div>
                            <?php } ?>
                          </div>
                        </div>

                        <div class="profile-content custom-pro-head">
                          <h2><span>Current goals</span></h2>
                          <div class="goals ">
                            <?php
                            $ID = $friend_row['c_u_id'];
                            $query = "SELECT * FROM `goals`WHERE c_u_id = $ID ";
                            $result2 = mysqli_query($db, $query);
                            while ($row2 = mysqli_fetch_array($result2)) {
                            ?>
                              <div class="goal tinder-interest-custom"><span><?php echo $row2['goal']; ?></span></div>
                            <?php } ?>
                          </div>
                          <div class="bio  settings__icon--center">

                            <div class="card-text">
                              <p style="word-break: break-word;"><span class="Linkify">About my bio</p>
                            </div>
                          </div>
                        </div>

                        <div class="profile-content profile-details">
                          <div class="experience settings__icon--wrap">


                            <div class="jss167 custom-common">
                              <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 16 15" class="jss164">
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
                                </svg><span>Experience</span></h3>
                              <?php
                              $ID = $friend_row['c_u_id'];
                              $query = "SELECT * FROM `connectin_users` WHERE c_u_id=$ID";
                              $result2 = mysqli_query($db, $query);
                              while ($row2 = mysqli_fetch_array($result2)) {
                              ?>

                                <span><?php  date_default_timezone_set('Asia/Kolkata');
                            $data = date("Y-m-d");
                           
                            $date1 = strtotime($row2['experience']);
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

                            ); ?></span><br />
                              <?php } ?>
                            </div>


                          </div>
                        </div>

                        <div class="profile-content profile-details">
                          <div class="industry settings__icon--wrap">


                            <div class="jss167 custom-common">
                              <h3 class="jss165"><svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                  <path d="M31.4 11.6c-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.8v-2.7c0-.5-.2-.9-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.5 3.7v-2.7c0-.4-.2-.8-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.2v2.8l5.7-2.9v2.8c0 .5.2.9.6 1.1.2.1.4.2.6.2s.4-.1.6-.2l6.5-3.7v2.7c0 .7.6 1.3 1.3 1.3.2 0 .4-.1.6-.2l6.4-3.8V26c0 .1-.1.3-.3.3h-22v2.6h22.1c1.5 0 2.7-1.2 2.7-2.8V12.6c-.1-.4-.3-.8-.7-1zM8.9 5.9c2.3.4 3.4.5 4.4.1 2.3-1 1.8-3.4 1.3-2.9-1.1.9-2.5 1.5-4.1 1.5-.6 0-1.1-.1-1.6-.2C7 4 6.4 5 6.4 5c-.4.5.2 1.1.7 1.1.4-.1.9-.2 1.4-.2h.4c.1 0 0 0 0 0zM2.9 5.1h-.1C1.4 5.1.3 6.2.3 7.6L0 27.3v.1c0 .8.7 1.5 1.5 1.5h4.2L5.5 7.6c-.1-1.4-1.2-2.5-2.6-2.5z"></path>
                                  <path d="M24.7 20.1h1.6c.5 0 1 .4 1 1v1.6c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.6c0-.6.5-1 1-1zM9.6 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1H9.6c-.5 0-1-.4-1-1v-1.7c0-.6.5-1 1-1zM17.2 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.7c0-.6.4-1 1-1z"></path>
                                </svg><span>Industry</span></h3>
                              <span><?php echo $friend_row['industry']; ?></span>
                            </div>

                          </div>
                        </div>



                        <div class="profile-content profile-details">
                          <div class="education settings__icon--wrap">


                            <div class="jss167 custom-common">
                              <h3 class="jss165"> <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                  <path d="M5.824 16.944v4.784c.16 3.808 4.64 6.88 10.176 6.88s10.016-3.056 10.16-6.88v-4.8L16 23.04z"></path>
                                  <path d="M16 2.72L0 11.424l16 8.704 13.088-7.12V23.04H32V11.424L16 2.72z"></path>
                                </svg><span>Education</span></h3>
                              <?php
                              $ID = $friend_row['c_u_id'];
                              $query = "SELECT * FROM `education`WHERE c_u_id = $ID ";
                              $result2 = mysqli_query($db, $query);
                              while ($row2 = mysqli_fetch_array($result2)) {
                              ?>

                                <div class="jss199">
                                  <h4 class="jss200"><?php echo $row2['school']; ?></h4>
                                  <h4 class="jss201"> <?php echo $row2['degree']; ?></h4>
                                </div>
                              <?php } ?>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="like" id="like"></div>
                    <div class="dislike" id="dislike"></div>
                              </div>
        <?php } ?>
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
<script src="/themes/geoconnectin/assets/js/hammer.min.js"></script>

<!-- pro popup -->
<form name='razorpayform' action="/razor/status" method="POST">
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





<script src="/slider/js/jquery.transform2d.js"></script>
<script src="/slider/js/jquery.jTinder.js"></script>
<script type="text/javascript">
  'use strict';

  /**
   * jTinder initialization
   */
  var slideCount = 0;
  var showPopupAfter = 10;
  $("#tinderslide").jTinder({

    // dislike callback
    onDislike: function(item) {
      ++slideCount;
      console.log([slideCount, item.attr('data-id')])
      // set the status text
      $('#status').html('Dislike image ' + (item.index() + 1));

      if (slideCount >= showPopupAfter) {
        $('#membershipUpgradeModal').modal('show');
      }

      $.ajax({
        url: "http://52.66.188.103/send/friend/request",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          id: item.attr('data-id'),
          action: 'dislike',
        },
        success: function(data) {
          if (data.status == "success") {
            console.log(data.message);
          }
        }
      })
    },
    // like callback
    onLike: function(item) {
      ++slideCount;

      // set the status text
      $('#status').html('Like image ' + (item.index() + 1));

      if (slideCount >= showPopupAfter) {
        $('#membershipUpgradeModal').modal('show');
      }

      $.ajax({
        url: "http://52.66.188.103/send/friend/request",
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          id: item.attr('data-id'),
          action: 'like',
        },
        success: function(data) {
          if (data.status == "success") {
            console.log(data.message);
          }
        }
      })
    },
    animationRevertSpeed: 200,
    animationSpeed: 400,
    threshold: 1,
    likeSelector: '.like',
    dislikeSelector: '.dislike'
  });

  /**
   * Set button action to trigger jTinder like & dislike.
   */
  $('.actions .like, .actions .dislike').click(function(e) {
    e.preventDefault();
    $("#tinderslide").jTinder($(this).attr('class'));
  });



  /*var tinderContainer = document.querySelector('.tinder');
  var allCards = document.querySelectorAll('.tinder--card');
  var nope = document.getElementById('dislike');
  var love = document.getElementById('like');
  var like = 'like';
  var dislike = 'dislike';

  function initCards(card, index) {
    var newCards = document.querySelectorAll('.tinder--card:not(.removed)');
    
    newCards.forEach(function (card, index) {
      card.style.zIndex = allCards.length - index;
      card.style.transform = 'scale(' + (20 - index) / 20 + ') translateY(-' + 30 * index + 'px)';
      card.style.opacity = (10 - index) / 10;
    });
    
    tinderContainer.classList.add('loaded');
    var tinderCount = $(".tinder--cards").find(".tinder--card").length;
    var tinderRemoved = $(".tinder--cards").find(".removed").length;
    var lttt = $(".menu").find(".childsss").length;
    var remainCrad = tinderCount - tinderRemoved;
    //$('div.lstcnt').html(lttt);
    if(tinderRemoved == 10){
      $('#membershipUpgradeModal').modal('show');
    }
    if(tinderRemoved > 0){
    $('span.countValue').html(remainCrad);
    $('div.again').html(remainCrad);
    } else {
      $('span.countValue').html(remainCrad);
      $('div.again').html(remainCrad);
    }
    if(remainCrad == 0){
      $('#buttonsHide').hide();
    }
  }

  initCards();

  allCards.forEach(function (el) {
    var hammertime = new Hammer(el);

    hammertime.on('pan', function (event) {
      el.classList.add('moving');
    });
    hammertime.on('pan', function (event) {
      if (event.deltaX === 0) return;
      if (event.center.x === 0 && event.center.y === 0) return;

      tinderContainer.classList.toggle('tinder_like', event.deltaX > 0);
      tinderContainer.classList.toggle('tinder_dislike', event.deltaX < 0);

      var xMulti = event.deltaX * 0.03;
      var yMulti = event.deltaY / 80;
      var rotate = xMulti * yMulti;

      event.target.style.transform = 'translate(' + event.deltaX + 'px, ' + event.deltaY + 'px) rotate(' + rotate + 'deg)';

    });

    hammertime.on('panend', function (event) {
      el.classList.remove('moving');
      tinderContainer.classList.remove('tinder_like');
      tinderContainer.classList.remove('tinder_dislike');
      var socialSlide = document.querySelectorAll('.socialcards:not(.hide)');
      var tinsSlide = document.querySelectorAll('.hideid:not(.FriendRequestSend)');
      var mobile = document.querySelector('.hideid:not(.FriendRequestSend)').value;
      var moveOutWidth = document.body.clientWidth;
      var keep = Math.abs(event.deltaX) < 80 || Math.abs(event.velocityX) < 0.5;

      event.target.classList.toggle('removed', !keep);
      
      if (keep) {
        event.target.style.transform = '';
      } else {
        var socialSlides = socialSlide[0];
        var tinsSlides = tinsSlide[0];
        var endX = Math.max(Math.abs(event.velocityX) * moveOutWidth, moveOutWidth);
        var toX = event.deltaX > 0 ? endX : -endX;
        var endY = Math.abs(event.velocityY) * moveOutWidth;
        var toY = event.deltaY > 0 ? endY : -endY;
        var xMulti = event.deltaX * 0.03;
        var yMulti = event.deltaY / 80;
        var rotate = xMulti * yMulti;

        event.target.style.transform = 'translate(' + toX + 'px, ' + (toY + event.deltaY) + 'px) rotate(' + rotate + 'deg)';
        socialSlides.classList.add('hide');
        tinsSlides.classList.add('FriendRequestSend');
        socialSlides.style.transform = 'translate(' + toX + 'px, ' + (toY + event.deltaY) + 'px) rotate(' + rotate + 'deg)';
        if (event.deltaX > 0) {
          $.ajax({
            url: "http://52.66.188.103/send/friend/request",
            method:'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            data: {
              id: mobile,
              action: like,
            },
            success:function(data) { 
              if(data.status == "success") {
                console.log(data.message);
              }
            }
          }) 
        } else {
          $.ajax({
            url: "http://52.66.188.103/send/friend/request",
            method:'POST',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            data: {
              id: mobile,
              action: dislike,
            },
            success:function(data) { 
              if(data.status == "success") {
                console.log(data.message);
              }
            }
          })
        }
        
        initCards();
      }
    });
  });

  function createButtonListener(love) {
    return function (event) {
      var cards = document.querySelectorAll('.tinder--card:not(.removed)');
      // var socialClick = document.querySelectorAll('.socialcards:not(.hide)');
      var tinsClick = document.querySelectorAll('.hideid:not(.FriendRequestSend)');
      var mobileClick = document.querySelector('.hideid:not(.FriendRequestSend)').value;
      var moveOutWidth = document.body.clientWidth * 1.5;

      if (!cards.length) return false;
      // if (!socialClick.length) return false;
      if (!tinsClick.length) return false;

      var card = cards[0];
      // var socialClicks = socialClick[0];
      var tinsClicks = tinsClick[0];
      
      // socialClicks.classList.add('hide');
      tinsClicks.classList.add('FriendRequestSend');
      card.classList.add('removed');

      if (love) {
        card.style.transform = 'translate(' + moveOutWidth + 'px, -100px) rotate(-30deg)';
        // socialClicks.style.transform = 'translate(' + moveOutWidth + 'px, -100px) rotate(-30deg)';

        $.ajax({
          url: "http://52.66.188.103/send/friend/request",
          method:'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          dataType: 'json',
          data: {
            id: mobileClick,
            action: like,
          },
          success:function(data) { 
            if(data.status == "success") {
              console.log(data.message);
            }
          }
        })

      } else {

        card.style.transform = 'translate(-' + moveOutWidth + 'px, -100px) rotate(30deg)';
        // socialClicks.style.transform = 'translate(-' + moveOutWidth + 'px, -100px) rotate(30deg)';

        $.ajax({
          url: "http://52.66.188.103/send/friend/request",
          method:'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          dataType: 'json',
          data: {
            id: mobileClick,
            action: dislike,
          },
          success:function(data) { 
            if(data.status == "success") {
              console.log(data.message);
            }
          }
        })
      }

      initCards();

      event.preventDefault();
    };
  }

  var nopeListener = createButtonListener(false);
  var loveListener = createButtonListener(true);

  nope.addEventListener('click', nopeListener);
  love.addEventListener('click', loveListener);

  document.ontouchmove = function(e){
      e.preventDefault();
  } */
</script>


<script>
  //  right panel toggle
  $(document).ready(function() {

    // $('.avt_ico').click(function(){
    //   $('.slider').toggleClass('mob');
    //   $('.right_panel').toggleClass('mob');
    //   $('.left_panel, .slider').removeClass('mob2');
    // });

    $('.jss106').click(function() {
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob');
    });
    $('.comp_logo').click(function() {
      $('.slider').toggleClass('mob2');
      $('.left_panel').toggleClass('mob2');
      $('.slider, .right_panel').removeClass('mob');
    });

    //var count = $(".tinder--cards").find(".tinder--card").length;
    //$('span.countvalue').html(count);
    //$(document).on('keyup','#serchtag',function(){

    /*$("body").keydown(function(e) {
      if(e.keyCode == 37) { // left
        $("#dislike").click();
      }
      else if(e.keyCode == 39) { // right
        $("#like").click();
      } 
    }); 
    $("body").keydown(function(e) {
      if(e.keyCode == 38) {

        $(".profile-intro").animate({
        top: "-=200"
        });
      } else if(e.keyCode == 40) {

        $(".profile-intro").animate({
        top: "+=200"
        });
      }
    }); */
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })
  });
</script>





<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // pro popup



    $('#membershipUpgradeButton2').click(function() {
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
        url: "http://65.0.131.51/dashboard.php",
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