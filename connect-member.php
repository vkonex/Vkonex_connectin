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
  <title>Member | Vkonex-connectin</title>
  <meta name="description" content="Vkonex-connectin">
  <meta name="csrf-token" content="obRcLN91oUDM1nfRSldUPRRBWoUMm51y2Obd4HPH">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
  <link href="/themes/geoconnectin/images/favicon.icon" rel='shortcut icon'>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/style.css">
  <link rel="stylesheet" href="/themes/geoconnectin/assets/css/custom.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


  <!-- NO -->

  <!-- jQuery 3 -->
  <script src="http://dev.geoconnectin.com/themes/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    var BASE_URL = 'http://dev.geoconnectin.com/';
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
  <!--end::Base javascript library -->

  <!-- NO -->
</head>
<!--end:: Head -->

<!--begin:: Body -->

<?php

require_once('dashboard_header.php');

?>
<?php
$ID = $_GET['id'];
$query = "SELECT * FROM `connectin_users` WHERE c_u_id=$ID";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);
?>
<div class="container-fluid">
  <!-- <div class="col-12 header">
                <div class="row">
                    <div class="col col-xs-3 comp_logo">
                      <a class="comp_logo_inn">
                        <img src="http://dev.geoconnectin.com/themes/geo/assets/img/AI/foot-logo.png" class="img-fluid logo_login">
                        </a>
                    </div>
                    <div class="col discover">
                        <a aria-current="page" class="nav-link active" href="/dashboard">
                            <i class="fa fa-files-o discover-ico" aria-hidden="true"></i>
                            <div style="position: relative;"><span>Explore</span>
                            <div class="badge suggestions-number again">5</div>
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
                                <div class="jss43 jss46 uper">Vinay Singh Rajput</div>
                                <div class="jss44 jss47">
                                  <span>Data Scientist</span>
                                  <span>at  aitechnohub</span>
                                </div>
                              </div>
                              <div class="jss45 active jss48">
                                                                <div class="jss49 jss51" style="background-image: url('http://dev.geoconnectin.com/storage/profile/5.jpg');"></div>
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
              <div class="text-truncate text-secondary font-weight-bold lstcnt"></div>
            </div>
          </div>


          <div class="friendList">
            <li class="bg"></li>

             

            <li class="menu">
              <a href="http://dev.geoconnectin.com/member/6">

                <div class="user-summary  is-new">
                  <div class="avatar-header">
                    <img src="http://dev.geoconnectin.com/assets/images/default-user.jpg" class="user-avatar-left">
                    <div class="badge new-message">&nbsp;</div>
                  </div>
                  <div class=" user-detail text-left">
                    <h4 class="user-name text-truncate" title="2062466">Vinay Singh </h4>
                    <p class="user-description text-truncate  icon--white" style="white-space: nowrap;"><span>Data Scientist</span><span> at Jp Mprgan</span></p>
                    <!-- <div class="text-truncate text-secondary font-weight-bold">Pardon?</div> -->
                  </div>
                  <!--  <div class="time-in-timeline"><span>Tuesday</span></div> -->
                </div>
              </a>
            </li>

            <li class="menu">
              <a href="http://dev.geoconnectin.com/member/12">

                <div class="user-summary  is-new">
                  <div class="avatar-header">
                    <img src="http://dev.geoconnectin.com/assets/images/default-user.jpg" class="user-avatar-left">
                    <div class="badge new-message">&nbsp;</div>
                  </div>
                  <div class=" user-detail text-left">
                    <h4 class="user-name text-truncate" title="2062466">Vinay Singh </h4>
                    <p class="user-description text-truncate  icon--white" style="white-space: nowrap;"><span></span><span> </span></p>
                    <!-- <div class="text-truncate text-secondary font-weight-bold">Pardon?</div> -->
                  </div>
                  <!--  <div class="time-in-timeline"><span>Tuesday</span></div> -->
                </div>
              </a>
            </li>

          </div>

          <div class="friendRequest" style="display:none;">
            <li class="bg"></li>
            <div class="menu" style="margin-top: 15px;">
              <p style="text-align:center;"> No Friend Request Found. </p>
            </div>
          </div>
        </ul>
        <!--  -->
      </div>


      <div class="user_profile_menu">
        <!-- <img src="http://dev.geoconnectin.com/assets/images/default-user.jpg" class=""> -->
        <!-- <h2 class="edit__fld user-name icon__remove icon--white">
      Vinay Singh       </h2> -->
        <!-- view on mobile only || chat nav -->
        <ul class="chat_nav list-unstyled list-inline">
          <li class="list-inline-item">
            <a class="chat_leftarrow">
              <svg width="15px" height="15px" viewBox="0 0 32 32" class="css207">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="chat_profile_pic_wrap">
              <img src="http://dev.geoconnectin.com/assets/images/default-user.jpg" class="img-fluid chat_profile_pic">
              <h2 class="chat_username">
                Vinay Singh </h2>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="chat_rightaarrow">
              <svg width="15px" height="15px" viewBox="0 0 32 32" class="css208">
                <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
              </svg>
            </a>
          </li>
        </ul>
        <!-- view on mobile only || chat menu -->
      </div>

      <!-- tinder slider -->
      <div class="slider" id="hide-on-small">
        <div class="tinder loaded">
          <div class="chatHead">
            <ul class="list-inline">
              <li class="list-inline-item hide-on-desktop"><a href="/member/Friendlist/5"><button class="MuiButtonBase-root jss106 no-background" tabindex="0" type="button" id="backsetting">
                    <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107 white-color" style="fill: #850d71">
                      <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
                    </svg>
                  </button></a></li>
              <li class="list-inline-item">
                <div class="profilePic">
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user['profilepic']);?>" width="30" height="30" class="<?php echo $user['username']; ?> img-responsive ">
                </div>
              </li>
              <li class="list-inline-item">
                <p class="userName">
                  <?php echo $user['username']; ?> </p>
              </li>
              <li id="right-side-custom" class="list-inline-item right-rotate-btn hide-on-desktop"><button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backsetting">
                  <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107 rotate-btn" style="fill: #850d71">
                    <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
                  </svg>
                </button></li>
            </ul>
          </div>



          <div id="chat_box_6" class="chat_box chat-opened" data-id="6">
            <div class="row">
              <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">

                  <div class="panel-body chat-area">

                  </div>
                  <div class="panel-footer">
                    <div class="input-group form-controls commentBox">
                      <textarea class="form-control chat_input" placeholder="Write your message here..."></textarea>
                      <span class="input-group-btn">
                        <button class="btn-chat" type="button" data-to-user="6" disabled>
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
            <source src="http://dev.geoconnectin.com/themes/geoconnectin/assets/sound/facebook_chat.mp3" />
          </audio>

        </div>
      </div>
      <!-- /tinder slider -->

      <div id="show-on-small" class="right_panel suggest-member">
        <div class="jss37 my_skills">
          <div class="tinder loaded">
            <div id="hide-left-side" class="list-inline-item hide-on-desktop"><button class="MuiButtonBase-root jss106" tabindex="0" type="button" id="backsetting">
                <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss107" style="fill: #850d71">
                  <path d="M22.512.368a1.15 1.15 0 0 1 1.695-.001l.001.001a1.264 1.264 0 0 1 0 1.745v-.001L10.752 16l13.456 13.888a1.26 1.26 0 0 1 0 1.744 1.15 1.15 0 0 1-1.695.001l-.001-.001L7.36 16z"></path>
                </svg>
              </button></div>
            <div class="tinder--cards pt-0">

              <div class="tinder--card profile-intro" style="z-index: 1; transform: scale(1) translateY(0px); opacity: 1; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <div class="head_image">

                  <!-- <div class="overlay" style="background-image: url('http://dev.geoconnectin.com/assets/images/default-user.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat;"></div> -->
                  <div class="card-image">
                    <div>
                      <label for="inputFileAvatar" class="profPicWrap select__item_op">
                        <div class="card-image-wrapper settings__icon-edit undefined" id="">
                          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user['profilepic']);?>" class="user-avatar modal__avatar size-110 pointer">
                      </label>
                      <input id="inputFileAvatar" class="input--invisible" type="file" name="inputFileAvatar[]" multiple="false" accept="image/*" onchange="upload()">
                    </div>
                  </div>
                  <div class="user-detail">
                    <div class="user_name_wrap select__item_op select__item_op">
                      <h2 class="edit__fld user-name icon__remove icon--white">
                        <?php echo $user['username']; ?> </h2>
                    </div>
                    <div class="user_disc_wrap select__item_op">
                      <p class="editdescription user-description settings__icon-edit icon--white">
                        <span><?php echo $user['d_title']; ?></span>
                        <span>at <?php echo $user['organization']; ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="location select__item_op"><i class="icon-geo icon-geo-Pin "></i> </div>
                </div>
              </div>
              <div class="head_detail_wrap">
                <div class="edit__fldtag profile-content profile-interest settings__icon-edit select__item_op" id="tag">
                  <div class="interests">
                    <?php
                    $query = "SELECT * FROM `interests`WHERE c_u_id=$ID";
                    $result2 = mysqli_query($db, $query);
                    while ($row2 = mysqli_fetch_array($result2)) {
                    ?>
                      <div class="interest false"><?php echo $row2['interest']; ?></div>

                    <?php } ?>


                  </div>
                </div>

                <div class="profile-content goal_wrap select__item_op">
                  <h2><span>Current goals</span></h2>
                  <div class="goals">
                    <?php
                    $query = "SELECT * FROM `goals`WHERE c_u_id = $ID ";
                    $result2 = mysqli_query($db, $query);
                    while ($row2 = mysqli_fetch_array($result2)) {
                    ?>
                      <div class="goal tinder-interest-custom"><span style="font-size:14px;"><?php echo $row2['goal']; ?></span></div>
                    <?php } ?>
                  </div>
                </div>

                <div class="profile-content bio_wrap select__item_op">
                  <div class="bio settings__icon--center">

                    <div class="card-text">
                      <p style="word-break: break-word;"><span class="Linkify"><span> <?php echo $user['bio']; ?></span></p>
                    </div>

                  </div>
                </div>
                <!--  Experience 
                      <div class="profile-content profile-details">
                        <div class="experience settings__icon--wrap">
                          <button class="MuiButtonBase-root jss162" tabindex="0" type="button">
                              <svg width="1em" height="1em" viewBox="0 0 16 15" class="jss164">
                                  <defs><path id="note_svg__a" d="M0 .616h15.662V15H0z"></path></defs>
                                  <g fill="none" fill-rule="evenodd">
                                      <g transform="translate(0 -.616)">
                                          <mask id="note_svg__b" fill="#fff"><use xlink:href="#note_svg__a"></use></mask>
                                          <path
                                              fill="#206AA7"
                                              d="M14.557 13.027a.999.999 0 0 1-.998.999H2.104a.999.999 0 0 1-1-1V3.16a1 1 0 0 1 1-1h2.41v1.204a.487.487 0 0 0 .973 0V2.16h5.252v1.203a.486.486 0 1 0 .971 0V2.16h1.848c.553 0 1 .447 1 .999v9.867zM13.38 1.187h-1.67v-.085a.486.486 0 1 0-.97 0v.085H5.486v-.085a.486.486 0 1 0-.973 0v.085H2.281A2.282 2.282 0 0 0 0 3.467v9.25a2.283 2.283 0 0 0 2.283 2.284H13.38a2.282 2.282 0 0 0 2.281-2.283v-9.25a2.281 2.281 0 0 0-2.28-2.281z"
                                              mask="url(#note_svg__b)"
                                          ></path>
                                      </g>
                                      <path fill="#206AA7" d="M12.078 6.074H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24m0 2.486H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24m0 2.562H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24"></path>
                                  </g>
                              </svg>
                              <div class="jss167">
                                  <h3 class="jss165"><span>Experience</span></h3>
                                  <h4 class="jss166"><span>2 month(s)</span></h4>
                              </div>
                          </button>
                          <div class="user__experience">
                              <h6 class="experienceedit"><i class="fa fa-pencil av_edit"></i></h6>
                              <h6 class="experiencecross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                          </div>
                        </div>
                      </div>
                      
                      
                      
                      <div class="profile-content profile-details">
                        <div class="previous settings__icon--wrap">
                          <button class="MuiButtonBase-root jss162" tabindex="0" type="button">
                              <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                                  <path
                                      d="M27.088 8.736a.324.324 0 0 0 0-.114v.002a.772.772 0 0 0-.192-.352l-8-8a.77.77 0 0 0-.347-.191L18.544.08H5.536a.8.8 0 0 0-.8.8v30.4a.8.8 0 0 0 .8.8h20.8a.8.8 0 0 0 .8-.8V8.832a.23.23 0 0 0-.048-.096zM24.384 8H19.2V2.768zM25.6 30.4H6.4V1.6h11.2v7.2a.8.8 0 0 0 .8.8h7.2z"
                                  ></path>
                                  <path d="M16.544 24.8h7.2v1.6h-7.2v-1.6zM8.544 13.6h15.2v1.6h-15.2v-1.6zM8.544 16.8h15.2v1.6h-15.2v-1.6zM8.544 20h15.2v1.6h-15.2V20z"></path>
                              </svg>
                              <div class="jss167">
                                  <h3 class="jss165"><span>Previously</span></h3>
                                  <span>Add your previous experiences</span>
                              </div>
                          </button>
                          <div class="user__previous">
                              <h6 class="previousedit"><i class="fa fa-pencil av_edit"></i></h6>
                              <h6 class="previouscross" style="display: none;"><i class="fa fa-times av_remove"></i></h6>
                              <h6 class="previousadd" style="display: none;"><i class="fa fa-plus av_add" aria-hidden="true"></i></h6>
                          </div>
                        </div>
                      </div>
                    
                      
                      -->


                <div class="profile-content profile-details">
                  <div class="experience settings__icon--wrap">
                    <button class="MuiButtonBase-root jss162" tabindex="0" type="button">
                      <svg width="1em" height="1em" viewBox="0 0 16 15" class="jss164">
                        <defs>
                          <path id="note_svg__a" d="M0 .616h15.662V15H0z"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                          <g transform="translate(0 -.616)">
                            <mask id="note_svg__b" fill="#fff">
                              <use xlink:href="#note_svg__a"></use>
                            </mask>
                            <path fill="#206AA7" d="M14.557 13.027a.999.999 0 0 1-.998.999H2.104a.999.999 0 0 1-1-1V3.16a1 1 0 0 1 1-1h2.41v1.204a.487.487 0 0 0 .973 0V2.16h5.252v1.203a.486.486 0 1 0 .971 0V2.16h1.848c.553 0 1 .447 1 .999v9.867zM13.38 1.187h-1.67v-.085a.486.486 0 1 0-.97 0v.085H5.486v-.085a.486.486 0 1 0-.973 0v.085H2.281A2.282 2.282 0 0 0 0 3.467v9.25a2.283 2.283 0 0 0 2.283 2.284H13.38a2.282 2.282 0 0 0 2.281-2.283v-9.25a2.281 2.281 0 0 0-2.28-2.281z" mask="url(#note_svg__b)"></path>
                          </g>
                          <path fill="#206AA7" d="M12.078 6.074H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24m0 2.486H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24m0 2.562H3.584a.62.62 0 1 1 0-1.24h8.494a.62.62 0 1 1 0 1.24"></path>
                        </g>
                      </svg>
                      <div class="jss167">
                        <h3 class="jss165"><span>Experience</span></h3>
                        <?php
                        $query = "SELECT * FROM `work_experiance` WHERE c_u_id=$ID";
                        $result2 = mysqli_query($db, $query);
                        while ($row2 = mysqli_fetch_array($result2)) {
                        ?>

                          <span><?php echo explode(" ", $row2['datetime'])[0]; ?></span><br />
                        <?php } ?>
                      </div>
                    </button>
                  </div>
                </div>


                <div class="profile-content profile-details">
                  <div class="industry settings__icon--wrap">
                    <button class="MuiButtonBase-root jss162" tabindex="0" type="button">
                      <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                        <path d="M31.4 11.6c-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.8v-2.7c0-.5-.2-.9-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.5 3.7v-2.7c0-.4-.2-.8-.6-1.1-.2-.1-.4-.2-.6-.2s-.4.1-.6.2l-6.4 3.2v2.8l5.7-2.9v2.8c0 .5.2.9.6 1.1.2.1.4.2.6.2s.4-.1.6-.2l6.5-3.7v2.7c0 .7.6 1.3 1.3 1.3.2 0 .4-.1.6-.2l6.4-3.8V26c0 .1-.1.3-.3.3h-22v2.6h22.1c1.5 0 2.7-1.2 2.7-2.8V12.6c-.1-.4-.3-.8-.7-1zM8.9 5.9c2.3.4 3.4.5 4.4.1 2.3-1 1.8-3.4 1.3-2.9-1.1.9-2.5 1.5-4.1 1.5-.6 0-1.1-.1-1.6-.2C7 4 6.4 5 6.4 5c-.4.5.2 1.1.7 1.1.4-.1.9-.2 1.4-.2h.4c.1 0 0 0 0 0zM2.9 5.1h-.1C1.4 5.1.3 6.2.3 7.6L0 27.3v.1c0 .8.7 1.5 1.5 1.5h4.2L5.5 7.6c-.1-1.4-1.2-2.5-2.6-2.5z"></path>
                        <path d="M24.7 20.1h1.6c.5 0 1 .4 1 1v1.6c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.6c0-.6.5-1 1-1zM9.6 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1H9.6c-.5 0-1-.4-1-1v-1.7c0-.6.5-1 1-1zM17.2 20.1h1.6c.5 0 1 .4 1 1v1.7c0 .5-.4 1-1 1h-1.6c-.5 0-1-.4-1-1v-1.7c0-.6.4-1 1-1z"></path>
                      </svg>
                      <div class="jss167">
                        <h3 class="jss165"><span>Industry</span></h3>
                        <span id="industry_profile_data"><?php echo $user['industry']; ?></span>
                      </div>
                    </button>
                  </div>
                </div>

                <div class="profile-content profile-details">
                  <div class="education settings__icon--wrap">
                    <button class="MuiButtonBase-root jss162" tabindex="0" type="button">
                      <svg width="1em" height="1em" viewBox="0 0 32 32" class="jss164">
                        <path d="M5.824 16.944v4.784c.16 3.808 4.64 6.88 10.176 6.88s10.016-3.056 10.16-6.88v-4.8L16 23.04z"></path>
                        <path d="M16 2.72L0 11.424l16 8.704 13.088-7.12V23.04H32V11.424L16 2.72z"></path>
                      </svg>
                      <div class="jss167">
                        <h3 class="jss165"><span>Education</span></h3>
                        <?php

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
                    </button>
                  </div>
                </div>
                <!-- <div class="tin_dashboard socialcards" style="clear: both;">
                          <div class="profile-content profile-details social__wrap">     
                            <div class="social__media-wrap settings__icon--wrap select__item_op" >
                              <div class="profile-wrapper-url settings__icon-create settings__icon--center">
                                <a  href="https://www.linkedin.com/in/vinay-singh-rajput-7254a348/"   target="_blank" class="icon linkedin-icon" rel="noopener noreferrer">
                                  <i class="fa fa-linkedin linkedin-icon" aria-hidden="true"></i>
                                </a>
                              </div>
                              
                            </div>

                          <div class="social__media-wrap settings__icon--wrap select__item_op">
                            <div class="profile-wrapper-url settings__icon-create settings__icon--center">
                              <a  target="_blank" class="icon weblink-icon" rel="noopener noreferrer">
                                <svg id="Layer_1" class="weblink-icon" enable-background="new 0 0 496.002 496.002" height="28" viewBox="0 0 496.002 496.002" width="28" xmlns="http://www.w3.org/2000/svg"><path d="m480.001 319.999c-4.531 0-460.021 0-464 0-8.837 0-16 7.163-16 16s7.163 16 16 16h6.806c39.593 85.714 126.103 144.003 225.209 144.003 99.128 0 185.616-58.354 225.178-144.002h6.806c8.837 0 16-7.163 16-16s-7.162-16.001-15.999-16.001zm-322.062 32h74.062v97.398c-32.174-25.347-56.985-57.958-74.062-97.398zm106.062 97.398v-97.398h74.062c-17.079 39.44-41.889 72.05-74.062 97.398zm-205.399-97.398h64.806c15.62 40.608 38.829 75.987 68.486 104.673-56.468-15.064-104.742-52.533-133.292-104.673zm245.505 104.674c29.656-28.686 52.866-64.065 68.487-104.673h64.806c-28.55 52.14-76.825 89.608-133.293 104.673zm-288.106-280.674h464c8.837 0 16-7.163 16-16s-7.163-16-16-16h-6.806c-64.882-140.457-239.751-186.451-364.955-100.895-37.278 25.473-66.637 60.203-85.434 100.895h-6.806c-8.837 0-16 7.163-16 16s7.164 16 16.001 16zm322.856-32h-74.856v-96.243c21.783 18.323 53.427 50.468 74.856 96.243zm-106.856-96.243v96.244h-74.857c21.43-45.776 53.074-77.921 74.857-96.244zm205.398 96.243h-63.639c-18.911-46.487-47.9-81.681-72.36-105.369 57.629 14.578 106.995 52.399 135.999 105.369zm-242.797-105.369c-24.46 23.688-53.449 58.883-72.361 105.369h-63.639c29.005-52.97 78.37-90.791 136-105.369zm-38.319 157.953c8.515 2.365 13.499 11.184 11.134 19.698l-20 72c-3.393 12.219-19.043 15.822-27.43 6.285l-15.986-18.175-15.986 18.175c-8.366 9.514-24.03 5.961-27.43-6.285l-20-72c-2.365-8.514 2.619-17.333 11.134-19.698 8.514-2.366 17.334 2.62 19.698 11.134l12.09 43.523c8.244-9.372 11.609-15.074 20.494-15.074s12.226 5.674 20.494 15.074l12.09-43.523c2.364-8.514 11.184-13.498 19.698-11.134zm288 0c8.515 2.365 13.499 11.184 11.134 19.698l-20 72c-3.393 12.219-19.043 15.822-27.43 6.285l-15.986-18.175-15.986 18.175c-8.397 9.547-24.042 5.917-27.43-6.285l-20-72c-2.365-8.514 2.619-17.333 11.134-19.698 8.512-2.366 17.334 2.62 19.698 11.134l12.09 43.523c8.244-9.372 11.609-15.074 20.494-15.074s12.226 5.674 20.494 15.074l12.09-43.523c2.365-8.514 11.186-13.498 19.698-11.134zm-144 0c8.515 2.365 13.499 11.184 11.134 19.698l-20 72c-3.393 12.219-19.043 15.822-27.43 6.285l-15.986-18.175-15.986 18.175c-8.366 9.514-24.03 5.961-27.43-6.285l-20-72c-2.365-8.514 2.619-17.333 11.134-19.698 8.513-2.366 17.334 2.62 19.698 11.134l12.09 43.523c8.244-9.372 11.609-15.074 20.494-15.074s12.226 5.674 20.494 15.074l12.09-43.523c2.365-8.514 11.188-13.498 19.698-11.134z"/></svg>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>  -->
              </div>
            </div>
          </div>
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
<script src="http://dev.geoconnectin.com/themes/geoconnectin/assets/js/hammer.min.js"></script>

<!-- pro popup -->
<form name='razorpayform' action="http://dev.geoconnectin.com/razor/status" method="POST">
  <input type="hidden" name="_token" value="obRcLN91oUDM1nfRSldUPRRBWoUMm51y2Obd4HPH">
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


<link rel="stylesheet" href="http://dev.geoconnectin.com/themes/geoconnectin/assets/css/member-chat.css" />
<script src="https://js.pusher.com/4.1/pusher.min.js"></script>
<script src="http://dev.geoconnectin.com/themes/geoconnectin/assets/js/member-chat.js"></script>

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

  function upload() {
    var imgcanvas = document.getElementById("can");
    var inputFileAvatar = document.getElementById("inputFileAvatar");
    var image = new SimpleImage(inputFileAvatar);
    image.drawTo(imgcanvas);
  }

  $(document).ready(function() {

    // My Inresets
    fetch_tag();

    function fetch_tag(query = '') {
      $.ajax({
        url: "http://dev.geoconnectin.com/tag/search",
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

      // Update Removed tags
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
        url: "http://dev.geoconnectin.com/tags",
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
        url: "http://dev.geoconnectin.com/goals",
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
          url: "http://dev.geoconnectin.com/profile",
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
        url: "http://dev.geoconnectin.com/profile/image",
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

    $('form[name="frm_chng_pws"]').validate({
      rules: {
        current_password: {
          required: true
        },
        password: {
          required: true,
          minlength: 8
        },
        password_confirm: {
          required: true,
          minlength: 8,
          equalTo: "#password"
        }
      },
      messages: {
        password_confirm: {
          equalTo: "Your passwords were mismatched."
        }
      },
      submitHandler: function(e) {

        var current_password = $('#current_password').val();
        var password = $('#password').val();

        $.ajax({
          url: "http://dev.geoconnectin.com/change-password",
          method: 'patch',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            current_password: current_password,
            password: password
          },
          success: function(data) {

            $("#myChangePwsMessage").html(data.message).show();

            setTimeout(function() {
              $("#myChangePwsMessage").fadeOut("slow").html('');
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

    $('form[name="frm_chng_email"]').validate({
      rules: {
        email: {
          required: true,
          email: true
        },
      },
      submitHandler: function(e) {
        var email = $('#email').val();
        $.ajax({
          url: "http://dev.geoconnectin.com/profile",
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          dataType: 'json',
          data: {
            email: email,
          },
          success: function(data) {
            $("#myemailMessage").html(data.message).show();
            setTimeout(function() {
              $("#myemailMessage").fadeOut("slow").html('');
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

    $('form[name="frm_my_bio"]').validate({
      rules: {
        about_me: {
          required: true,
        },
      },
      submitHandler: function(e) {
        var about_me = $('#about_me').val();
        $.ajax({
          url: "http://dev.geoconnectin.com/profile/description",
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
          url: "http://dev.geoconnectin.com/profile/description",
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
          url: "http://dev.geoconnectin.com/social/update",
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
          url: "http://dev.geoconnectin.com/social/update",
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
      $('.right_panel').toggleClass('mob');
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
      $('.right_panel').toggleClass('mob');
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
      $('.right_panel').toggleClass('mob');
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
      console.log(email_notification);
      $.ajax({
        url: "http://dev.geoconnectin.com/profile/description",
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
        url: "http://dev.geoconnectin.com/profile/description",
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
      $('.right_panel').toggleClass('mob');
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
      $('.right_panel').toggleClass('mob');
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
      $('.right_panel').toggleClass('mob');
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
      $(".educationcross").show();
      $(".educationedit").hide();
    });
    $(".educationcross").click(function() {
      $(".profile-intro").toggleClass("editable");
      $(".edit__fld").toggleClass("edit__mode");
      $("#education").hide();
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
      $('.right_panel').toggleClass('mob');
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
      $('.right_panel').toggleClass('mob');
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
    // $('.avt_ico').click(function(){
    //   $('.slider').toggleClass('mob');
    //   $('.right_panel').toggleClass('mob');
    //   $('.left_panel, .slider').removeClass('mob2');
    // });
    // $('.jss106').click(function(){
    //   $('.slider').toggleClass('mob');
    //   $('.right_panel').toggleClass('mob');
    // });
    // $('.comp_logo').click(function(){
    //   $('.slider').toggleClass('mob2');
    //   $('.left_panel').toggleClass('mob2');
    //   $('.slider, .right_panel').removeClass('mob');
    // });
    // $('.chat_leftarrow').click(function(){
    //   $('.user_profile_menu').toggleClass('mob');
    //   $('.left_panel').toggleClass('mob2');
    //   $('.right_panel').toggleClass('mob');
    // });
    // $('.chat_rightaarrow').click(function(){
    //   //$('.user_profile_menu').toggleClass('mob');
    //   $('.chat_rightaarrow').toggleClass('mob');
    //   $('.right_panel').toggleClass('mob2');
    //   $('.profile__edit_wrap').toggleClass('mob');
    // });
    $('#right-side-custom').click(function() {
      //$('.user_profile_menu').toggleClass('mob');
      $('#hide-on-small').hide();
      $('#right-side-custom').hide();
      $('#show-on-small').show();
    });
    $('#hide-left-side').click(function() {
      //$('.user_profile_menu').toggleClass('mob');
      $('#hide-on-small').show();
      $('#right-side-custom').show();
      $('#show-on-small').hide();
      $('#hide-left-side').hide();
    });

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
        url: "http://dev.geoconnectin.com/razor/pay",
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
      url: "http://dev.geoconnectin.com/action/friend/request",
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
    var APP_URL = "http:\/\/dev.geoconnectin.com"
    $("#keyword").autocomplete({
        minLength: 0,
        source: function(request, response) {
          var keywordvalue = $('#keyword').val();
          $.ajax({
            type: 'POST',
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "http://dev.geoconnectin.com/action/search/autocomplete",
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