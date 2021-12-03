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
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `post_jobs` WHERE j_id=$id";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div style="background-color: white;">

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>CTC <?php echo $row['CTC']; ?> </h1><br>

          <span><?php echo $row['j_title']; ?></span>
        </div>
      </div>
    </div>
  </div>

  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="tabs-content" style="display: block;">
            <h4>Description</h4>

            <p>
              <?php echo $row['j_description']; ?>
            </p></div>

          <br>
        </div>

        <div class="col-md-4">
          <br>
          <div style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <img src="https://www.incimages.com/uploaded_files/image/1920x1080/getty_587536358_2000133320009280405_395605.jpg" alt="" class="img-fluid wc-image">
          </div>
          <br>

          <a href="filldetails.php?id=<?php echo $id; ?>" class="filled-button text-center" style="background:purple; color:white; font-size:14px; border-radius:12px; padding:9px; display: block">Apply for this Job</a>

          <br>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-lg-9">
          <div class="tabs-content" style="display: block;">
            <h4>About Employer</h4>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae provident quae quidem minima cupiditate tempora aperiam corrupti ducimus quos quisquam ipsam, laborum voluptatibus reiciendis saepe, at, facere cum quo! Nesciunt.</p>

            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam optio doloribus modi? Odio voluptatibus dolorem itaque illo recusandae quasi unde eaque architecto, repellendus id consequatur vel totam, doloremque distinctio quas explicabo iure quisquam quis rem ipsa, accusantium! Perspiciatis, dicta, recusandae?</p>

            <br>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum sunt dolore minima commodi laudantium accusamus nemo repellat sapiente, eius error hic, autem. Dicta eveniet at consequatur dolorum placeat in, laborum beatae temporibus, delectus accusantium assumenda corporis, eum animi quaerat minus eos necessitatibus ipsam! Officia ut ab aspernatur, voluptatem blanditiis qui neque repellendus sapiente voluptas tempora exercitationem ipsa vel, dolorum consequatur.</p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="tabs-content">
            <h4>Contact Details</h4>

            <p>
              <span>Name</span>

              <br>

              <strong>Guru</strong>
            </p>

            <p>
              <span>Phone</span>

              <br>

              <strong>
                <a href="tel:123-456-789">123-456-789</a>
              </strong>
            </p>

            <p>
              <span>Mobile phone</span>

              <br>

              <strong>
                <a href="tel:456789123">456789123</a>
              </strong>
            </p>

            <p>
              <span>Email</span>

              <br>

              <strong>
                <a href="mailto:john@carsales.com">guru@hr.com</a>
              </strong>
            </p>
          </div>
        </div>
      </div>

      <br>



      <br>
      <br>
      <br>
    </div>
  </div>

  <!-- Footer Starts Here -->




  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" id="contact">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter full name" required="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter email address" required="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Enter phone" required="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="From date" required="">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="To date" required="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Send Request</button>
        </div>
      </div>
    </div>
  </div>
</div>