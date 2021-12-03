<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Artificial Intelligence</title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="themes/geo/assets/css/AI/style.dev.css" type="text/css" media="all" />
        <link rel="stylesheet" href="themes/geo/assets/css/AI/style.css" type="text/css" media="all" />
        <script type="text/javascript" src="themes/geo/assets/js/jquery.js" ></script>
        <script type="text/javascript" src="themes/geo/assets/js/jq-sticky-anything.min.js"></script>
        <script src="https://use.fontawesome.com/771203af5f.js"></script>
        <link rel="stylesheet" href="themes/geo/assets/css/AI/custom_m.css" type="text/css" media="all" />


        <!-- Bootstrap -->
        <link rel="stylesheet" href="themes/geo/assets/css/bootstrap.css" />
        <!-- AI Custom CSS -->
        <link rel="stylesheet" href="themes/geo/assets/css/AI/custom.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body
        class="page-template-default page page-id-873 et_button_no_icon et_pb_button_helper_class et_transparent_nav et_non_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns3 et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db"
    >
    <nav class="navbar navbar-default navbar-fixed-top cstm-nav">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="http://52.66.188.103">
        <img src="http://52.66.188.103/themes/geo/assets/img/AI/foot-logo.png" alt="Landing AI"/>
    </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
           <a href="#">AI Transformation</a>
        </li>
        <li><a href="#">Industries</a></li>
        <li><a href="#">Platform</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <div id="page-container">
            <!-- <header id="main-header" data-height-onload="66">
                <div class="container clearfix et_menu_container">
                    <div class="logo_container">
                        <span class="logo_helper"></span>
                        <a href="http://52.66.188.103">
                            <img src="http://52.66.188.103/themes/geo/assets/img/AI/foot-logo.png" alt="Landing AI" id="logo" data-height-percentage="54" />
                        </a>
                    </div>
                    <div id="et-top-navigation" data-height="66" data-fixed-height="40">
                        <nav id="top-menu-nav">
                            <ul id="top-menu" class="nav">
                                <li id="menu-item-904" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-873 current_page_item menu-item-904">
                                    <a href="#" aria-current="page">AI Transformation</a>
                                </li>
                                <li id="menu-item-3067" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3067"><a href="#">Industries</a></li>
                                <li id="menu-item-3056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3056"><a href="#">Platform</a></li>
                                
                                <li id="menu-item-32" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-32">
                                    <a href="/about/">Company</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-1457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1457"><a href="#">About Us</a></li>
                                        <li id="menu-item-157" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-157"><a href="#">Blog</a></li>
                                        <li id="menu-item-242" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242"><a href="#">Press</a></li>
                                        <li id="menu-item-1476" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1476"><a href="#">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                        <div id="et_mobile_nav_menu">
                            <div class="mobile_nav closed">
                                <span class="select_page">Select Page</span>
                                <span class="mobile_menu_bar mobile_menu_bar_toggle">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#ffffff" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="et_search_outer">
                    <div class="container et_search_form_container">
                        <form role="search" method="get" class="et-search-form" action="#">
                            <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />
                        </form>
                        <span class="et_close_search_field"></span>
                    </div>
                </div>
            </header> -->
            <!-- #main-header -->
            <section class="aiBanner">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>AI Transformation</h1>
                            <p>Inject the power of AI innovation into your organization today.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="serviceBlock">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Landing AI is partnering with enterprise companies on long-term programs, helping companies inject AI DNA within 18-24 months and establish internal AI competence for sustainable success.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Transformation is Possible</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="cstm-list-inline">
                                <li>
                                    <div class="cntnt">
                                        <img src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_1.jpg" alt="" title="" />
                                        <h3>Execute Pilot Projects to Gain Momentum</h3>
                                        <p>Select and execute on a small number of initial pilot AI projects to gain momentum. Better to have initial wins and incorporate learnings.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cntnt">
                                        <img src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_2.jpg" alt="" title="" />
                                        <h3>Build an In-house AI Team</h3>
                                        <p>Build a strong in-house AI team, leveraging our network of top AI talent around the globe. Your AI team will be an extended family of Landing AI.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cntnt">
                                        <img src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_3.jpg" alt="" title="" />
                                        <h3>Provide Broad AI Training</h3>
                                        <p>Consider three levels: (1) executives, division leaders and engineers on AI strategy, (2) applications, trends, AI project workflow (3) implementation, theory and practice.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cntnt">
                                        <img src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_4.jpg" alt="" title="" />
                                        <h3>Develop an AI Strategy</h3>
                                        <p>Design a set of customized AI strategies that will position your company to become a leading AI company in its sector.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="cntnt">
                                        <img src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_5.jpg" alt="" title="" />
                                        <h3>Develop Internal and External Communications</h3>
                                        <p>AI will affect your business significantly, consider running a communications program to ensure key stakeholder alignment.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="industriesBlock">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>AI is Transforming Industries Worldwide</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="cntnt-block">
                                <img  class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_manufacturing.jpg" alt="" title="" />
                                <div class="cntnt">
                                <h3>Manufacturing</h3>
                                <img class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/dots.png" alt="" title="" />
                                <a href="#">Learn More</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cntnt-block">
                                <img  class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_retail.jpg" alt="" title="" />
                                <div class="cntnt">
                                <h3>Retail</h3>
                                <img class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/dots.png" alt="" title="" />
                                <a href="#">Learn More</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cntnt-block">
                                <img  class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_automotive.jpg" alt="" title="" />
                                <div class="cntnt">
                                <h3>Automotive</h3>
                                <img class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/dots.png" alt="" title="" />
                                <a href="#">Learn More</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cntnt-block">
                                <img  class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_agricultural.jpg" alt="" title="" />
                                <div class="cntnt">
                                <h3>Agriculture</h3>
                                <img class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/dots.png" alt="" title="" />
                                <a href="#">Learn More</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cntnt-block">
                                <img  class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_telecommunications.jpg" alt="" title="" />
                                <div class="cntnt">
                                <h3>Telecommunications</h3>
                                <img class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/dots.png" alt="" title="" />
                                <a href="#">Learn More</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="cntnt-block">
                                <img  class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/transformations_pharmeceutical.jpg" alt="" title="" />
                                <div class="cntnt">
                                <h3>Pharmaceutical</h3>
                                <img class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/dots.png" alt="" title="" />
                                <a href="#">Learn More</a>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section class="supportBlock">
                <div class="container">
                    <div class="cntntBlock">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="cntnt">
                                    <h3>A Platform that Supports Transformation</h3>
                                    <img class="img-responsive" src="http://52.66.188.103/themes/geo/assets/img/AI/dots.png" alt="" title="" />
                                    <p>Fast track your AI adoption with LandingLens, a visual inspection platform that provides end-to-end capabilities and includes everything customers need to collect, manage, share, and optimize the intelligence of their data. One integrated platform purpose-built for manufacturers.</p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img class="img-responsive cntnt-img" src="http://52.66.188.103/themes/geo/assets/img/AI/guy_with_ipad.jpg" alt="" title="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div id="et-main-area">
                <div id="main-content">
                    <article id="post-873" class="post-873 page type-page status-publish hentry">
                        <div class="entry-content">
                            <div id="et-boc" class="et-boc">
                                
                                      
                                        <!-- .et_pb_section -->
                                        <div class="et_pb_section et_pb_section_3 et_pb_fullwidth_section et_section_regular">
                                            <section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_1 et_pb_text_align_center et_pb_bg_layout_dark">
                                                <div class="et_pb_fullwidth_header_container center">
                                                    <div class="header-content-container center">
                                                        <div class="header-content">
                                                            <h2 class="et_pb_module_header">Get Started Today</h2>

                                                            <div class="et_pb_header_content_wrapper"></div>
                                                            <a class="et_pb_button et_pb_more_button et_pb_button_one" href="javascript:void(0)">Contact Us</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="et_pb_fullwidth_header_overlay"></div>
                                                <div class="et_pb_fullwidth_header_scroll"></div>
                                            </section>
                                        </div>
                                        <!-- .et_pb_section -->
                                    </div>
                                    <!-- .et_builder_inner_content -->
                                </div>
                                <!-- .et-l -->
                            </div>
                            <!-- #et-boc -->
                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- .et_pb_post -->
                </div>
                <!-- #main-content -->

                <!-- #main-footer -->
            </div>
            <!-- #et-main-area -->
        </div>
        <!-- #page-container -->

        <script type="text/javascript" src="assets/js/frontend-builder-global-functions.js"></script>
        
        
        <script type="text/javascript" id="stickThis-js-extra">
            /* <![CDATA[ */
            var sticky_anything_engage = { element: "#sticky", topspace: "100", minscreenwidth: "0", maxscreenwidth: "999999", zindex: "999999", legacymode: "", dynamicmode: "", debugmode: "", pushup: "", adminbar: "1" };
            /* ]]> */
        </script>

        

        <script type="text/javascript" src="assets/js/jquery.mobile.custom.min.js">
        </script>
        
        <script type="text/javascript" src="assets/js/custom.js"></script>

        

        <style id="et-builder-module-design-873-cached-inline-styles">
            div.et_pb_section.et_pb_section_0 {
                background-image: url(assets/img/transformation-hero.jpeg) !important;
            }
        </style> 
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    </body>
</html>

