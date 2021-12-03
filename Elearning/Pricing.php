<!DOCTYPE html>
<html lang="en">

<head>

    <title>Vkonex E-learning</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">



</head>
<style>
#home {
    background-image: url("images/pic.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 1;
    height: 70rem;
}

#img {
    background-color: gray;
    background-repeat: no-repeat;
    background-size: cover;

}

#img h2 {
    color: white;
}

#img h4 {
    color: white;
}

#img p {
    color: white;
}

#home {
    padding: 0;
}

#home h1 {
    color: white;
    z-index: 1;

}

#home h3 {
    color: rgb(255, 255, 255);
    font-size: 20px;
    font-weight: 500;
    padding: 5px 0 40px 0;
    z-index: 1;
}

@import url('https://fonts.googleapis.com/css?family=Muli:300,700|Nunito');

body {
    background: #ffffff;
    font-family: 'poppins', sans-serif;
    overflow-x: hidden;
    padding-top: 70px;
}


/*---------------------------------------
     TYPOGRAPHY              
  -----------------------------------------*/

h1,
h2,
h3,
h4,
h5,
h6 {

    font-weight: bold;
    line-height: inherit;
}

h1 {
    color: black;
    font-size: 3em;
    line-height: normal;
}

h2 {
    color: black;
    font-size: 2em;

}

h3 {
    font-size: 2em;
}

h3,
h3 a {
    color: black;
}

p {
    color: #757575;
    font-size: 17px;
    font-weight: normal;
    line-height: 24px;
    font-family: 'poppins', sans-serif;
}



/*---------------------------------------
     GENERAL               
  -----------------------------------------*/

html {
    -webkit-font-smoothing: antialiased;
}

::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-thumb {
    cursor: pointer;
    background: #000000;
}

.section-title {
    padding-bottom: 40px;
}

.section-title h2 {
    margin: 0;
}

.section-title small {
    display: block;
}

.overlay {
    background: rgba(20, 20, 20, 0.5);
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.entry-form {
    background: #252020;
    border-radius: 100%;
    text-align: center;
    padding: 6em;
    width: 450px;
    height: 450px;
}

.entry-form h2 {
    color: #ffffff;
    margin: 0;
}

.entry-form .form-control {
    background: transparent;
    border: 0;
    border-bottom: 1px solid;
    border-radius: 0;
    box-shadow: none;
    height: 45px;
    margin: 10px 0;
}

.entry-form .submit-btn {
    background: #ffffff;
    border-radius: 50px;
    border: 0;
    color: #252020;
    width: 50%;
    height: 50px;
    margin: 30px auto;
    margin-bottom: 10px;
}

.entry-form .submit-btn:hover {
    background: #3f51b5;
    color: #ffffff;
}

section {
    position: relative;
    padding: 100px 0;
}

#team,
#testimonial {
    background: #f9f9f9;
}

#team,
#testimonial {
    text-align: center;
}

#google-map iframe {
    border: 0;
    width: 100%;
    height: 390px;
}



/*---------------------------------------
     BUTTONS               
  -----------------------------------------*/

.section-btn {
    background-color: #3f51b5;
    color: #ffffff;
    font-size: inherit;
    font-weight: normal;
    padding: 15px 30px;
    border: none;
}

.btns {
    background-color: #3f51b5;
    color: #ffffff;
    font-size: inherit;
    font-weight: normal;
    padding: 15px 30px;
    border: none;
}

video {
    margin-top: 5rem;
}

/*---------------------------------------
      MENU              
  -----------------------------------------*/

.custom-navbar {
    background: #ffffff;
    border-top: 5px solid #2e3192;
    border-bottom: 0;
    -webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
    padding: 12px 0;
    margin-bottom: 0;
    padding: 0;
}

.custom-navbar .navbar-brand {
    color: #454545;
    font-size: 18px;
    font-weight: bold;
    line-height: 40px;
}

.custom-navbar .navbar-nav.navbar-nav-first {
    margin-left: 8em;
}

.custom-navbar .navbar-nav.navbar-right li a {
    padding-right: 12px;
    padding-left: 12px;
}

.custom-navbar .navbar-nav.navbar-right li a .fa {
    background: #2e3192;
    border-radius: 100%;
    color: #ffffff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    display: inline-block;
    margin-right: 5px;
}

.custom-navbar .nav li a {
    line-height: 40px;
    color: #575757;
    padding-right: 22px;
    padding-left: 22px;
}

.custom-navbar .navbar-nav>li>a:hover,
.custom-navbar .navbar-nav>li>a:focus {
    background-color: transparent;
}

.custom-navbar .nav li a:hover {
    background-color: #2e3192;
    color: #ffffff;
}

.custom-navbar .nav li.active>a {
    background-color: #2e3192;
    color: #ffffff;
}

.custom-navbar .navbar-toggle {
    border: none;
    padding-top: 10px;
}

.custom-navbar .navbar-toggle {
    background-color: transparent;
}

.custom-navbar .navbar-toggle .icon-bar {
    background: #252525;
    border-color: transparent;
}




/*---------------------------------------
      FEATURE              
  -----------------------------------------*/
#feature {
    background-color:
        #f8f9fd
}

.feature-thumb {
    border: 1px solid #f0f0f0;
    padding: 5em 3em;
}

.feature-thumb span {
    background: #3f51b5;
    border-radius: 50px;
    color: #ffffff;
    font-size: 25px;
    font-weight: bold;
    display: inline-block;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    margin-bottom: 5px;
}

.feature-thumb h3 {
    margin: 10px 0;
}



/*---------------------------------------
      ABOUT              
  -----------------------------------------*/

#about {
    padding: 50px 50px 50px 50px;
    background-color: #f7f9fb;
}



/*---------------------------------------
      TEAM              
  -----------------------------------------*/

.team-thumb {
    background: #ffffff;
    position: relative;
    overflow: hidden;
    text-align: left;
}

.team-info {
    padding: 20px 30px;
}

.team-image img {
    width: 100%;
}

.team-thumb .social-icon {
    border-top: 1px solid #f0f0f0;
    padding: 4px 20px 0 20px;
}

.team-thumb .social-icon li a {
    background: #ffffff;
    color: #252020;
}

.team-info h3 {
    margin: 0;
}




/*---------------------------------------
     NEWS              
  -----------------------------------------*/

.news-thumb {
    clear: both;
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}

.news-thumb .news-image {
    float: left;
    width: 40%;
    margin-right: 30px;
}

.news-info h3 {
    margin-top: 5px;
    margin-bottom: 10px;
}

.news-date span {
    color: #909090;
    font-weight: bold;
}


/*---------------------------------------
      CONTACT             
  -----------------------------------------*/

#contact {
    background: #fff;
}

#contact h2 {
    color: black;
}

#contact .section-title {
    padding-bottom: 20px;
}

#contact h2>small,
#contact p,
#contact a {
    color: black;
}

#contact-form {
    padding: 1em 0;
}

#contact-form .col-md-12,
#contact-form .col-md-4 {
    padding-left: 0;

}

#contact-form .form-control {
    border: 0;
    border-radius: 5px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    margin: 10px 0;
    /* background-color: rgb(221, 220, 220); */


}

#contact-form input {
    height: 50px;
}

#contact-form input[type='submit'] {
    border-radius: 50px;
    border: 1px solid transparent;
    background: #3f51b5;
    color: white;
}

#contact-form input[type='submit']:hover {
    background: #3f51b5;
    border-color: #ffffff;
    color: #ffffff;
}




/*---------------------------------------
     FOOTER              
  -----------------------------------------*/

footer {
    background: #3f51b5;
    padding: 120px 0;
}

footer .section-title {
    padding-bottom: 10px;
}

footer h2 {
    font-size: 20px;
}

footer a,
footer p {
    color: white;
}

footer strong {
    color: white;
}

footer address p {
    margin-bottom: 0;
}

footer .social-icon {
    margin-top: 25px;
}

.footer-info {
    margin-right: 2em;
}

.footer-info h2 {
    color: #ffffff;
    padding: 0;
}

.footer_menu h2 {
    margin-top: 2em;
}

.footer_menu ul {
    margin: 0;
    padding: 0;
}

.footer_menu li {
    display: inline-block;
    list-style: none;
    margin: 5px 10px 5px 0;
}

.newsletter-form .form-control {
    background: transparent;
    border-radius: 0;
    box-shadow: none;
    border: 0;
    border-bottom: 1px solid #303030;
    height: 50px;
    margin: 5px 0;
}

.contact {
    margin-top: 1.1rem;
}

.newsletter-form input[type="submit"] {
    background: transparent;
    border: 1px solid #f9f9f9;
    border-radius: 50px;
    color: #ffffff;
    display: block;
    margin-top: 20px;
    outline: none;
    width: 50%;
}

.newsletter-form input[type="submit"]:hover {
    background: #2e3192;
    border-color: transparent;
}

.newsletter-form .form-group span {
    color: #909090;
    display: block;
    font-size: 12px;
    margin-top: 20px;
}



/*---------------------------------------
     SOCIAL ICON              
  -----------------------------------------*/

.social-icon {
    position: relative;
    padding: 0;
    margin: 0;
}

.social-icon li {
    display: inline-block;
    list-style: none;
    margin-bottom: 5px;
}

.social-icon li a {
    border-radius: 100px;
    color: white;
    font-size: 15px;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-decoration: none;
    text-align: center;
    transition: all 0.4s ease-in-out;
    position: relative;
    margin: 5px 5px 5px 0;
}

.social-icon li a:hover {
    background: #2e3192;
    color: #ffffff;
}



/*---------------------------------------
     RESPONSIVE STYLES              
  -----------------------------------------*/

@media screen and (max-width: 1170px) {
    .custom-navbar .navbar-nav.navbar-nav-first {
        margin-left: inherit;
    }
}

@media only screen and (max-width: 992px) {

    section,
    footer {
        padding: 60px 0;
    }


    .feature-thumb,
    .about-info,
    .team-thumb,
    .footer-info {
        margin-bottom: 50px;
    }

    .contact-image {
        margin-top: 50px;
    }
}


@media only screen and (min-width: 768px) and (max-width: 991px) {
    .custom-navbar .nav li a {
        padding-right: 10px;
        padding-left: 10px;
    }
}

@media only screen and (max-width: 767px) {
    h1 {
        font-size: 2.5em;
    }

    h1,
    h2,
    h3 {
        line-height: normal;
    }

    .custom-navbar {
        background: #ffffff;
        -webkit-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
        padding: 10px 0;
        text-align: center;
    }

    .custom-navbar .navbar-brand,
    .custom-navbar .nav li a {
        line-height: normal;
    }

    .custom-navbar .nav li a {
        padding: 10px;
    }

    .custom-navbar .navbar-brand,
    .top-nav-collapse .navbar-brand {
        color: #252525;
        font-weight: 600;
    }

    .custom-navbar .nav li a,
    .top-nav-collapse .nav li a {
        color: #575757;
    }

    .custom-navbar .navbar-nav.navbar-right li {
        display: inline-block;
    }

    .footer-info {
        margin-right: 0;
    }

    .footer-info.newsletter-form {
        margin-bottom: 0;
    }

    .entry-form {
        display: block;
        margin: 0 auto;
    }
}


@media only screen and (max-width: 580px) {
    h2 {
        font-size: 1.8em;
    }

    #testimonial .item {
        padding: 2em;
    }

    .contact-image {
        margin-top: 0;
    }
}

@media only screen and (max-width: 480px) {
    h1 {
        font-size: 2em;
    }

    #home h3 {
        font-size: 14px;
    }

    .entry-form {
        border-radius: 0;
        padding: 2em;
        max-width: 100%;
        max-height: 100%;
        width: inherit;
        height: inherit;
    }
}

.form-control {
    border-color: #2e3192;
    display: block;
    align-items: center;
    height: 4.5rem;
}
</style>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- MENU -->


    <?php
require_once('menu.php');
?>

    <section id="img" class="text-center">
        <h2>
            Premium product at a Non-premium price</h2>
        <h4>No Recurring Fees (One-time fee) | Self-hosted | Zero Transaction Charges</h4>
        <a href="#feature" class="section-btn btn btn-default smoothScroll ">Get Vkonex Now </a>
    </section>
    <section class="text-center">
        <h2>Pricing Plans</h2>
        <div class="container">
            <div class="row" style="margin-left:20rem;">
                <div class="col-md-6 col-6 col-xl-6">
                    <div class="card" style="width: 35rem; border:2px solid #D3D3D3">
                        <div class="card-body">
                            <h4 class="card-text">Regular</h4>
                            <h3 style="color:#2e3192;"> $400</h3><br>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p><br>
                            <a href="#feature" class="section-btn btn btn-default smoothScroll "
                                style="margin-bottom:2rem;">Buy Now</a><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-6 col-xl-6">
                    <div class="card" style="width: 35rem; border:2px solid #D3D3D3">
                        <div class="card-body">
                            <h4 class="card-text">Premium</h4>
                            <h3 style="color:#2e3192;"> $900</h3><br>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p>
                            <p>Sell Course &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                &nbsp;<i class="fas fa-check-circle" style="color: #2e3192;"></i></p><br>
                            <a href="#feature" class="section-btn btn btn-default smoothScroll "
                                style="margin-bottom:2rem;">Buy Now</a><br>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section id="testimonial" style="background-color: white;">
        <div class="container">
            <div class="row" ">

                  <div class=" col-md-12 col-sm-12">
                <div class="section-title">

                    <h2>Why vkonex ?</h2>
                    <p>Vkonex offers you the biggest values at the most affordable pricing. It’s the only solution that
                        offers<br> a fully customizable, self-hosted, and turnkey experience altogether in one.</p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 6rem;">
            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Discount Coupons</h4>
                <p>Purchase once, and forget about any kind of recurring monthly or annual fees. Get
                    100% ownership and a lifetime license.</p>
            </div>

            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Push notifications</h4>
                <p>
                    Get complete access to 100% open and unencrypted source-code, which is not the case in any kind
                    of SaaS alternatives.</p>
            </div>

            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>100% independence</h4>
                <p>You are not only free to choose your hosting provider but also free from dependence on script
                    vendors for code customization..</p>
            </div>

        </div>
        <div class="row mt-5" style="margin-top: 6rem;">
            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Quick deployment</h4>
                <p>Like SaaS, even a custom turnkey script like Pinlearn can be deployed quickly; only new
                    customizations take a few days.</p>
            </div>

            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Ready-made yet tailored</h4>
                <p>Custom scripts like Pinlearn are not only turnkey solutions, they can also be customized to fit
                    your unique requirements.</p>
            </div>

            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Easy migration</h4>
                <p>Migration is tough or impossible from SaaS, but websites built on custom scripts can be migrated
                    seamlessly.</p>
            </div>

        </div>
        <div class="row mt-5" style="margin-top: 6rem;">
            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Quick deployment</h4>
                <p>Like SaaS, even a custom turnkey script like Pinlearn can be deployed quickly; only new
                    customizations take a few days.</p>
            </div>

            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Ready-made yet tailored</h4>
                <p>Custom scripts like Pinlearn are not only turnkey solutions, they can also be customized to fit
                    your unique requirements.</p>
            </div>

            <div class="col-md-4 col-xl-4 col-sm-4">
                <i class="fas fa-comments-dollar fa-4x" style="color: #2e3192;"></i>
                <h4>Easy migration</h4>
                <p>Migration is tough or impossible from SaaS, but websites built on custom scripts can be migrated
                    seamlessly.</p>
            </div>

        </div>

        </div>
    </section>

    <?php
require_once('footer.php');
?>