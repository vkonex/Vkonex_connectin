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
              <div class="text-truncate text-secondary font-weight-bold lstcnt"></div>
            </div>
          </div>


          <div class="friendList">
            <li class="bg"></li>
            <div class="menu" style="margin-top: 15px;">
              <p style="text-align:center;"> No Friend Found. </p>
            </div>
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
      <style type="text/css">
        .left_panel {
          display: none;
        }
      </style>
















      <div class="searchContainer">
        <div class="row">

          <div class="col-md-7">
            <div class="leftPannel">

              <a href="" class="no-decoration">
                <div id="users" class="">











                </div>
              </a>




            </div>
          </div>


          <!--<div class="col-md-5">       for keep in leftside -->
            <div class="rightPannel">

              <div class="searchCard custom-card">
                <h2>
                  <span>Goals</span>

                </h2>

                <div class="searchFieldTags">
                  <input type="hidden" name="selected_goals" value="" />

                  <ul class="list-inline m-0 lightTags searchGoalHolder custom-goal-hold">
                    <?php
                    $goals_sql = "SELECT MIN(G_id) AS G_id, goal FROM goals GROUP BY goal";
                    $result = mysqli_query($db, $goals_sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <li id="goal-list-item" class="list-inline-item searchGoal" data-id="<?php echo $row['G_id']; ?>"><?php echo $row['goal']; ?></li>
                    <?php
                    }
                    ?>
                  </ul>

                  <ul class="list-inline m-0 darkTags searchedGoalHolder custom-goal-hold-dark">





                  </ul>
                </div>
              </div>


              <div class="searchCard custom-card">
                <h2>
                  <span>Interest</span>
                </h2>
                <div class="searchFieldTags">
                  <input type="hidden" name="selected_interests" value="" />

                  <ul class="list-inline m-0 lightTags searchInterestHolder custom-goal-hold">
                    <?php
                    $interests_sql = "SELECT MIN(I_id) AS I_id, interest FROM interests GROUP BY interest";
                    $result = mysqli_query($db, $interests_sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                      <li id="interest-list-item" class="list-inline-item searchInterest" data-id="<?php echo $row['I_id']; ?>"><?php echo $row['interest']; ?></li>
                    <?php
                    }
                    ?>
                  </ul>

                  <ul class="list-inline m-0 darkTags searchedInterestHolder custom-goal-hold-dark">
                  </ul>
                </div>
              </div>

              <div class="jssv1332">
                <div class="search_btn_wrap2">
                  <a class="btn hollow-btn active" href="searchkeyword.php">Clear all</a>
                  <button type="button" id="swipe_profiles" class="btn hollow-btn">Swipe Profiles</button>
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
<script src="themes/geoconnectin/assets/js/hammer.min.js"></script>

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





<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>


<!-- Fetching users -->

<script>
  /*function getAllUsers() {
    let div = document.getElementById('users')
    fetch('get_users.php').then(result => result.text()).then(data => {
      div.innerHTML = data
    }).catch(err => {
      console.log('Error:', err)
    })
  }
  getAllUsers()
  let input = document.getElementById('keyword')
  input.addEventListener('input', (event) => {
    let query = event.target.value.toLowerCase();
    if (query.trim() === "") {
      getAllUsers()
    } else {
      let div = document.getElementById('users')
      let formData = new FormData()
      formData.append('searchTerm', query)
      fetch('search_users.php', {
          method: "POST",
          body: formData
        }).then((res) => res.text())
        .then(data => {
          div.innerHTML = data
        }).catch(err => {
          console.log(err)
        })
    }
  })*/

  //Swipe profile functon

  let swipe = document.getElementById('swipe_profiles')
  swipe.addEventListener('click', (event) => {
    let goalsHolder = document.getElementsByClassName('searchedGoalHolder custom-goal-hold-dark')
    let interestsHolder = document.getElementsByClassName('searchedInterestHolder custom-goal-hold-dark')
    let interests = []
    let goals = []
    for (let i = 0; i < interestsHolder.length; i++) {
      let interestUL = interestsHolder[i];
      let uls = interestUL.querySelectorAll('li')
      for (let j = 0; j < uls.length; j++) {
        interests.push(uls[j].getElementsByTagName('span')[0].innerHTML)
      }
    }
    for (let i = 0; i < goalsHolder.length; i++) {
      let goalsUL = goalsHolder[i];
      let uls = goalsUL.querySelectorAll('li')
      for (let j = 0; j < uls.length; j++) {
        goals.push(uls[j].getElementsByTagName('span')[0].innerHTML)
      }
    }

    let formData = new FormData()
    formData.append('goals', JSON.stringify(goals))
    formData.append('interests', JSON.stringify(interests))
    fetch('http://65.0.131.51/swipe.php', {
      method: "POST",
      body: formData
    }).then((result) => result.text()).then((data) => {
      let users = [...new Set(data.split(','))]
      users.pop()
      window.location = `http://65.0.131.51/dashboard.php?users=${encodeURIComponent(users.toString())}`
    }).catch((err) => {
      console.log("Swipe Error : ", err)
    })
  })


  function onprofileclick(event, id) {
    console.log(event)
    event.preventDefault()
    window.location = `http://65.0.131.51/connect-member.php?id=${id}`
  }
</script>
<script>
  $('.searchGoalHolder').on('click', '.searchGoal', function() {
    var text = $(this).html();
    var goalId = $(this).attr('data-id');

    let existsData = $('input[name=selected_goals]').val();
    let existsDataArr = existsData.split(',').filter(function(el) {
      return el.length != 0
    });
    existsDataArr.push(goalId);

    $('.searchedGoalHolder').append('<li class="list-inline-item" data-id="' + goalId + '"><span>' + text + '</span>   <i class="fa fa-times searchedGoalCancel" aria-hidden="true"></i></li>');
    $(this).remove();
    $('input[name=selected_goals]').val(existsDataArr.join(','));
  });

  $('.searchedGoalHolder').on('click', '.searchedGoalCancel', function() {
    var text = $(this).siblings('span').html();
    var goalId = $(this).parent().attr('data-id');

    let existsData = $('input[name=selected_goals]').val();
    let existsDataArr = existsData.split(',').filter(function(el) {
      return el.length != 0
    });
    existsDataArr = existsDataArr.filter(e => e !== goalId);

    $('.searchGoalHolder').append('<li class="list-inline-item searchGoal" data-id="' + goalId + '">' + text + '</li>');
    $(this).parent().remove();
    $('input[name=selected_goals]').val(existsDataArr.join(','));
  });


  $('.searchInterestHolder').on('click', '.searchInterest', function() {
    var text = $(this).html();
    var interestId = $(this).attr('data-id');

    let existsData = $('input[name=selected_interests]').val();
    let existsDataArr = existsData.split(',').filter(function(el) {
      return el.length != 0
    });
    existsDataArr.push(interestId);

    $('.searchedInterestHolder').append('<li class="list-inline-item" data-id="' + interestId + '"><span>' + text + '</span>   <i class="fa fa-times searchedInterestCancel" aria-hidden="true"></i></li>');
    $(this).remove();
    $('input[name=selected_interests]').val(existsDataArr.join(','));
  });

  $('.searchedInterestHolder').on('click', '.searchedInterestCancel', function() {
    var text = $(this).siblings('span').html();
    var interestId = $(this).parent().attr('data-id');

    let existsData = $('input[name=selected_interests]').val();
    let existsDataArr = existsData.split(',').filter(function(el) {
      return el.length != 0
    });
    existsDataArr = existsDataArr.filter(e => e !== interestId);

    $('.searchInterestHolder').append('<li class="list-inline-item searchInterest" data-id="' + interestId + '">' + text + '</li>');
    $(this).parent().remove();
    $('input[name=selected_interests]').val(existsDataArr.join(','));
  });

  // $('#swipe_profiles').click(function() {
  //   let goalIds = $('input[name=selected_goals]').val();
  //   let interestIds = $('input[name=selected_interests]').val();
  //   let keyword = getParameterByName('keyword');

  //   var url = '/member/search?';
  //   if (keyword != '' && typeof keyword == 'string') {
  //     url += 'keyword=' + keyword + "&";
  //   }

  //   if (goalIds != '') {
  //     url += 'goals=' + goalIds + "&";
  //   }

  //   if (interestIds != '') {
  //     url += 'interests=' + interestIds + "&";
  //   }

  //   window.location.href = url;
  // })

  function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  }


  //  right panel toggle
  /*$(document).ready(function(){    
    $('.jss106').click(function(){
      $('.slider').toggleClass('mob');
      $('.right_panel').toggleClass('mob');
    });
    $('.comp_logo').click(function(){
      $('.slider').toggleClass('mob2');
      $('.left_panel').toggleClass('mob2');
      $('.slider, .right_panel').removeClass('mob');
    });

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  });
  $(function(){
    $("#slider").slick({
      autoplay: false,
      speed: 1000,
      variableWidth: true,
      centerMode: true,
      centerPadding: "0"
    });
  });*/
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