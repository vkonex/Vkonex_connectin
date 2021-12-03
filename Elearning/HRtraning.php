<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
include_once('menu.php');
?>
<style>
    body{
        padding:0;
        margin:0;
    }
    .image{

        /* background: url(../images/slider-image1.jpg) no-repeat center center fixed; */
        background-image: 
            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url(
                './images/slider-image1.jpg');
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        /* filter: brightness(50%); */
        color:white;
        text-align: center;
      
    }
    .image-text{
        padding:100px;
        font-size:20px;        
    }
</style>

<style>
    * {
      box-sizing: border-box;
    }
    
    /* Create two equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%; 
      padding: 90px;
      height: 650px; /* Should be removed. Only for demonstration */
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    ul {
  list-style: none;
  padding: 0;
}
li {
  padding-left: 1.3em;
  margin-bottom:20px;
  
}
ul.b > li:before {
    background-color:#0040A0;
    padding-left:3px;
    margin-right: 5px;
    color:white;
    border-radius: 50px;
  content: "\f00c"; /* FontAwesome Unicode */
  font-family: FontAwesome;
  display: inline-block;
  margin-left: -1.3em; /* same as padding-left set on li */
  width: 1.45em; /* same as padding-left set on li */
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

     .col {
  float: left;
  width: 50%;
  padding: 10px;
  /* Should be removed. Only for demonstration */
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
    
    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 1000px) {
      .column {
        width: 100%;
      }
    }
    </style>

<body>



    <section style="height:550px;" class="image">
        <div class="image-text">
        <h1>HR Training Software for Companies</h1>
        <p>To keep things smooth, every organization must keep its HR professionals up-to-date and skilled as per changing corporate environments. Using an online HR training platform can make continuous training and workshops pretty easy. Get Pinlearn Now.</p>
        <button style="background-color:#0040A0; " class='btn btn-primary'>Get Vkonex now</button>
       </div>
    </section>
<br><br>

    <section style="height:120px;">
        <h2 style="text-align:center; font-weight:bold;">With Vkonex, you can build companies like</h2>
        <div>
            <ul style="list-style-type: none; text-align:center;">
                <li style="float:center; display: inline; margin:50px;">HUMAN RESOURCE</li>
                <li style="float:center; display: inline; margin:50px;">CONDUCTOR</li>
                <li style="float:center; display: inline; margin:50px;">VKONEX</li>
            </ul>
        </div>
    </section>

    <section style="align-items:center; background-color:aliceblue; height:900px;">
        <div class="row" style="align-items:center;">
            <div class="column" style="height:300px;" >
                <h2 style="font-weight: bold;">Why you need an online HR training platform?</h2><br><br>
                <p> Right from their own on-boarding to onboarding other employees, resolving workplace conflicts, dealing with employee retention, communicating termination notices, one can just go on explaining about the complex job description of an HR professional</p>
            </div>
            <div class="column">
                <ul class="b">
                    <li>Quick compliance  :
                         <br> An online HR platform converts your slower classroom
                         training into a much faster workflow via digital delivery of courses, repeated
                         tasks, grading, assessments, and assignments.
                    </li>

                    <li>
                        Customized training :<br> 
                        Pinlearn also allows you to create and deliver customized
                        training modules to individual learners, thus making it feasible to train every
                        team member on their unique Job Description.
                    </li>

                    <li>
                        Easy tracking :
                        <br> Senior management can keep a close track on learning progress
                        of every trainee via dedicated dashboards. It simplifies the way organizations
                        can manage training of its HR professional across branches.
                    </li>

                    <li>
                        Cost cutting :<br>
                        Classroom training is an expensive undertaking. With HR training
software, you can take your entire training program to a digital space, which
demands only a fraction of investments that physical classes require.
                    </li>
                </ul>
            </div>
          </div>
    </section><br><br>


    <section>
        <h2 style="text-align:center; font-weight:bold;">What makes Pinlearn a perfect HR training software?</h2>
        <div  class="row">
            <div class="column" style="height:250px; align-items:center; align-self:center; text-align:center; ">
                <p ><i style="color:#0040A0;" i class="fas fa-code fa-3x"></i></p>
                <p>Intrusive course-building</p>
                <p>Pinlearn allows you to create even complex courses in the easiest ways. With structured course authoring divided into modules, sections, lectures, and resources you can build courses without breaking a sweat..</p>
            </div>

            <div class="column" style="height:250px; text-align:center;">
                <p><i style="color:#0040A0;" class="far fa-comments fa-3x"></i></p>
                <p>Learning on the go</p>
                <p>Encourages 24x7 learning with on the go access to learning resources available as self-paced courses, recorded lectures, instant messaging system and community discussion boards etc.</p>
             </div>

          <div class="row">
            <div class="column" style="height:350px; text-align:center;">
                <p><i style="color:#0040A0;" class="fas fa-location-arrow fa-3x"></i></p>
                <p>Multi-lingual training</p>
                <p>Create and deliver HR training courses into different languages. Best of companies with HR teams spread across different regions
                    on the planet. Create your courses once, and delivered localized versions for different regions</p>
            </div>

            <div class="column" style="height:350px; text-align:center;">
                <p><i style="color:#0040A0;" class="fas fa-tools fa-3x"></i></p>
                <p>No recurring cost</p>
                <p>Pinlearn is available with 100% open source-code access, which implies that you need not pay any recurring fee to use it. Purchase once, and you can have your HR training platform for good.</p>
             </div>

            </div>
          </div>
    </section>


    <section style="height:350px; margin-bottom:100px; padding:0px;" class="image">
        <div class="image-text">
        <h1>Building an HR Platform?</h1>
        <p>Pinlearn is an apt solution for your cause. It fits all your HR training requirements out of the box.</p>
        <button style="background-color:#0040A0;" class='btn btn-primary'>Get Vkonex now</button>
       </div>
    </section>

    <section id="contact">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="" method="post">
                         <div class="section-title">
                              <h2>Let’s get in touch</h2>
                              <h3>Give us a call +1 408-909-5136 or drop an email below.</h3>
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <input type="text" class="form-control" placeholder="Enter full name" name="name"
                                   required="">

                              <input type="email" class="form-control" placeholder="Enter email address"
                                   name="email" required="">

                              <input type="phone" class="form-control" placeholder="Enter Phone number"
                                   name="phone" required="">

                              <textarea class="form-control" rows="6" placeholder="Tell us about your message"
                                   name="message" required=""></textarea>
                         </div>

                         <div class="col-md-4 col-sm-12">
                              <input type="submit" class="form-control" name="send message" value="Send Message">
                         </div>

                    </form>
               </div>

               <div class="col-md-6 col-sm-12">
                    <div class="contact-image" style="border: 1px solid grey; padding: 3rem 3rem 3rem 3rem;">
                         <h2>Pinlearn Sales Team</h2>&nbsp;&nbsp;&nbsp;
                         <h4>15 Minute Meeting</h4>&nbsp;&nbsp;&nbsp;&nbsp;
                         <p><i class="far fa-clock"></i>&nbsp;&nbsp;15 min</p>&nbsp;&nbsp;
                         <p><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;Phone Call</p>&nbsp;&nbsp;
                         <p>This 15min call gives you time to let us know about your needs to see if our product is
                              right for you.</p>
                         <a href="#feature" class="section-btn btn btn-default smoothScroll "
                              style="color: white;">Check Live Demo</a>
                    </div>
               </div>

          </div>
     </div>
</section>


    <?php include_once('footer.php') ?>
</body>
</html>