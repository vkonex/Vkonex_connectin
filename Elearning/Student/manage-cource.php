<?php
require_once ("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.min.css">
    <title>Document</title>
</head>
<body>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Manage Cource</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                
                            </ol>
                            <button ata-toggle="modal" data-target="#exampleModal"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white"><i class="fa fa-user-plus" style="margin-right:10px;"></i>Add New Cource</button>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Job Search -->
                <!-- ============================================================== -->

                <form class="form-inline form-a-jobtext">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputCandidateName" class="sr-only">Password</label>
                        <input type="text" class="form-control" id="inputCandidateName" placeholder="Cource Name">
                      </div>
                      <div class="form-group mx-sm-3 mb-2">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>-Cource Type-</option>
                          <option>Web-developement</option>
                          <option>Android-development</option>
                          <option>Machine-learning</option>
                          <option>Others</option>
                        </select>
                      </div>
                      <div class="form-group mx-sm-3 mb-2">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>-Class Duration-</option>
                          <option>less than 05 hrs</option>
                          <option>01-05 hrs</option>
                          <option>06-10 hrs</option>
                          <option>10-15 hrs</option>
                          <option>more than 15 hrs</option>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                    <button type="submit" class="btn btn-outline-primary mb-2">Reset</button>
                  </form>
             
                  <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->

                  <table id="example_table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                      Cource Name
                                    </label>
                                  </div>
                            </th>
                            <th>Cource Type</th>
                            <th>Cource Duration</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="form-check">
                                <input class="form-check-input id-checkbox" type="checkbox" value="" id="checkboxid1">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Full Stack Bootcamp
                                </label>
                              </div></td>
                            <td>Web-developement</td>
                            <td>05-10hrs</td>
                            <td>10 Jun 2021</td>
                            <td>10 Jun 2021</td>
                            <td>
                                <i class="fas fa-edit job_icon" data-toggle="tooltip" title="Edit"></i>
                                <i class="fas fa-trash-alt job_icon" data-toggle="tooltip" title="Delete"></i>
        
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example_table').DataTable();
} );

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function(){
    $('#flexCheckDefault').change(function(event){
        $('[checkbox]').checked = event.target.checked
    })
    $('#exampleModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
})

    </script>

</body>

</html>


<?php
require_once ("footer.php");
?>