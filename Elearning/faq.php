<!DOCTYPE html>
<html>
<head>
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> 

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.column {
      width: 50%; 
      background:pink;
}



.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
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

@media  screen and (max-width: 1000px){
     .col {
  float: left;
  width: 100%;
  padding: 10px;
  /* Should be removed. Only for demonstration */
}
     
}

</style>
</head>
<?php include_once('menu.php'); ?>
<body>

     <br><br>
<section>
     <div class="top text-center">
          <h2>General</h2>
          <p>Find answers to the general questions asked about Pinlearn below.<br>
           You can always reach out to us if you can’t find your answers here.</p>
     </div><br><br>

     <div class="container">
          <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="carouse" style=" margin-top:30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col">

               </div>
             </div>
     </div>
</section><br><br>

<section style='background-color:rgba(228, 241, 254, 1)'><br><br>
     <div class="top text-center">
          <h2>Technical</h2>
          <p>Learn everything technical about Pinlearn here.</p>
     </div><br><br>

     <div class="container">
          <div class="row justify-content-start">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>



             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>



             <div class="row">
               <div class="col">

               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>
     </div><br><br>
</section>
<br><br>

<section>
     <div class="top text-center">
          <h2>Billing</h2>
          <p>Know everything about billing process of Pinlearn, and how you can <br>
               get Pinlearn’s software to build your platform.</p>
     </div><br><br>

     <div class="container">
          <div class="row justify-content-start">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>
     </div>
</section><br><br>









<section style="background:rgba(228, 241, 254, 1)"><br>
     <div class="top text-center">
          <h2>Others</h2>
          <p>Get all other answers to your questions about Pinlearn here.</p>
     </div><br><br>

     <div class="container">
          <div class="row justify-content-start">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>


             <div class="row">
               <div class="col">
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
               <div class="col" >
                    <div class="carouse" style="margin-top: 30px;">
                         <button class="collapsible">Open Collapsible</button>
                         <div class="content">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                         </div>
                    </div>
               </div>
             </div>
     </div><br><br>
</section><br><br><br><br><br><br>

<!-- <div class="details" >
<ul style="list-style-type: none;">
     <li style="float:left;">
          <form style="width:500px; margin:50px;">
               <h3 style="color: #555;">Let's get in touch</h3>
               <p style="color: #555;">Give us a call – +1 408-909-5136 <br> or drop an email below.</p>
               <div class="mb-3">
                 <input type="name" placeholder="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>

               <div class="mb-3">
                    <input type="name" placeholder="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <input type="name" placeholder="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <input type="name" placeholder="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                    <input type="name" placeholder="your message" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

               <button type="submit" style="padding-left:230px; padding-right:230px" class="btn btn-primary">Send</button>
             </form>
     </li>
     <li style="float:left; background:rgba(197, 239, 247, 1); margin:60px; padding:50px; border-radius: 8px;">
          <div>
               <p clas="text-center"> Vkonex sales team</p>
               <h3> 15 Minute Meeting </h3>
               <p>15 min</p>
               <p>Phone call</p>
               <p>This 15min call gives you time to<br>
                     let us know about your needs to see if our product is right for you. </p>
               <button class="btn btn-primary"> schedule Now</button>

          </div>
     </li>
</ul>
</div> -->


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

<?php include_once('footer.php'); ?>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
