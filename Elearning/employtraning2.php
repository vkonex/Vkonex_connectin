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
<?php include_once('menu.php') ?>
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

    @media screen and (max-width: 1069px) {
      .column {
        width: 100%;
      }
    }

    @media screen and (max-width: 830px) {
      .bluebox{
          font-size: 15px;
      }
    }

    @media screen and (max-width: 651px) {
        ul > li.bg{
            font-size:12px;
            display:list-item; 
        }

    }

    @media screen and (max-width: 624px) {
      .bluebox{
          font-size: 14px;
         
      }
    }

    @media screen and (max-width: 583px) {
        .top{
            margin-bottom: 50px;
        }
    }

    @media screen and (max-width: 563px) {
        .top{
            margin-bottom: 50px;
        }
        body{
            font-size:15px;
        }
        .bluebox{
            height:100rem;
        }
    }

    @media screen and (max-width: 525px) {
        .top{
            margin-bottom: 50px;
        }
    }

    @media screen and (max-width: 525px) {
        .iii{
            text-align:justify
        }
    }

    @media screen and (max-width: 477px) {
        .image-text{
            font-size: 15px;
            margin:10px;
            padding:10px;
        }
    }

    @media screen and (max-width: 431px) {
        .last{
            font-size: 15px;
            margin:10px;
            padding:10px;
        }
    }

    @media screen and (max-width: 430px) {
        .top{
            margin-bottom: 20px;
            margin-left: 30px;
        }

        li {
  padding-left: 30px;
  margin-bottom:50px;
  
}


.column {
      float: left;
      width: 100%; 
      padding: 0px;
      height: 0px; /* Should be removed. Only for demonstration */
    }
    }


    </style>

<body>
    <section style="height:550px;" class="image">
        <div class="image-text">
        <h1>Employee Training Software for Companies</h1>
        <p>Take your employee training program to the next level with employee training management software and build a productive workforce in even lesser investment. Create and deliver employee training courses across your branches with one central solution</p>
        <button style="background-color:#0040A0; " class='btn btn-primary'>Get Vkonex now</button>
       </div>
    </section>
<br><br>

    <section  style="height:120px;">
        <h2 style="text-align:center; font-weight:bold;">With Vkonex, you can build companies like</h2>
        <div>
            <!-- <ul class="ii" style="list-style-type: none; text-align:center; margin-top:30px;">
                <li class="bg" style="float:center; display: inline; margin:20px;">CONGGNO</li>
                <li class="bg" style="float:center; display: inline; margin:20px;">CONDUCTOR</li>
                <li class="bg" style="float:center; display: inline; margin:20px;">VKONEX</li>
            </ul> -->
        </div>
    </section>

    <section class="bluebox" style="align-items:center; background-color:aliceblue; height:1100px;">
        <div class="row" style="align-items:center;">
            <div class="top column" style="height:200px;" >
                <h2 style="font-weight: bold;">Why you need an online employee training platform?</h2><br><br>
                <p> Be an MNC or a local setup, every business trains its staff on multiple aspects:
                    pre-employment training, compliance training, onboarding training, and skill-enhancement lifelong training, to name a few.</p>
            </div>
            <div class="column">
                <ul class='b'>
                    <li>Automated process : <br> An online employee training platform upgrades your
                        traditionally complex and more expensive classroom programs into digital and
                        automated curriculums. Trainers can automate repeated tasks such as
                        attendance, grading, assessments, and assignments.
                    </li>

                    <li>
                        Saves time :<br> An employee training management software helps you to
minimize the time spent on repetitive tasks, classrooms setups, course
delivery, travel, etc. Companies can get rid of physical disruptions and acquire
a faster throughput from a typical training program.
                    </li>

                    <li>
                        Simplifies course creation :<br> Trainers can use digital methods to prepare
learning materials and create online courses. This simplifies the workflow of
course authoring and allows trainers to not only create courses easily but also
update them as required from time to time
                    </li>

                    <li>
                        Reduces training cost :<br> With a digital employee training platform, companies need not hire too many trainers, or bear the cost of classroom setups, stationeries, travel, and venue. The digital delivery mechanism lets you create courses once and deliver repeatedly without any extra cost.
                    </li>
                </ul>
            </div>
          </div>
    </section><br><br>


    <section class="last">
        <h2 style="text-align:center; font-weight:bold;">What makes Pinlearn a perfect employee training software?</h2>
        <div  class="row">
            <div class="column" style="height:250px; align-items:center; align-self:center; text-align:center; ">
                <p ><i style="color:#0040A0;" i class="fas fa-code fa-3x"></i></p>
                <p>Powerful course-builder</p>
                <p>Pinlearn retains a powerful course-builder that lets you create a course with a complete collection of self-learning materials, multimedia, video lectures, modules, live classes, and group webinars.</p>
            </div>

            <div class="column" style="height:250px; text-align:center;">
                <p><i style="color:#0040A0;" class="far fa-comments fa-3x"></i></p>
                <p>Rich communications</p>
                <p>Encourages on-platform employee-trainee exchange of ideas and productive discussions with using an integrated instant messaging system and community discussion boards.</p>
             </div>
            </div>
          <div class="row">
            <div class="column" style="height:350px; text-align:center;">
                <p><i style="color:#0040A0;" class="fas fa-location-arrow fa-3x"></i></p>
                <p>Ease of use</p>
                <p>A perfect employee training software with dedicated easy-to-use dashboards for tutors as well as learners. Both trainers and employees needn’t be a teach wizard to use the platform for teaching and learning.</p>
            </div>

            <div class="column" style="height:350px; text-align:center;">
                <p><i style="color:#0040A0;" class="fas fa-tools fa-3x"></i></p>
                <p>Fully customizable</p>
                <p>Pinlearn is not only whitelabel but also fully customizable with open source-code access. You can give your employee training platform your unique brand identity without any hassle.</p>
             </div>

            </div>
          
    </section>


    <section style="height:350px; margin-bottom:100px; padding:0px;" class="image">
        <div class="image-text">
        <h1>Building an Employee Training Platform?</h1>
        <p>Check Pinlearn and let us know if it fits your employee training requirements. We can also customize Pinlearn as per your unique needs.</p>
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