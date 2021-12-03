<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<style>
    .dar {
        color: grey;
        font: size 200px;
    }

    .dar:hover {
        color: blue;
    }

    i {
        color: #67757c;
    }

    i:hover {
        color: blue;
    }

    div.scroll {
        overflow-x: inherit;
        white-space: nowrap;



    }

    .navbar {
        /* overflow-x: scroll; */
        padding-bottom: 150px;
        overflow: hidden;
        z-index: 9999;
        position: fixed; 
        bottom:30px;
        height:80px;
        margin-bottom: 150px;
        border-bottom: 15px solid #67757c;;  
    }
</style>
<style>
    .dropbtn {

        color: gray;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: fixed;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }


    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
     /* li .dropdown-item:hover
    {
        display: inline;
    } */
</style>

<body>
    <nav class="navbar navbar-expand-lg mt-4 " style="margin-bottom:100px; background-color:#fff">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color: black;"></i></span>
            </button>
            <div class="collapse navbar-collapse scroll" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a> -->
                    <li>
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;" href="dashboard_analytics.php"><span style="font-weight: bold;">Dashboard</span></a>
                            <div class="dropdown-content">
                                <a href="dashboard_analytics.php">Analytics</a>

                            </div>
                        </div>

                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        <i class="fas fa-user"></i>&nbsp;
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Tutor</span></a>
                            <div class="dropdown-content">
                                
                                <a href="dashboard_tutor_list.php">List Tutors</a>
                                <a href="createnew_tutor.php">Create Tutors</a>

                            </div>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i class="fas fa-users"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Students</span></a>
                            <div class="dropdown-content">
                                <a href="dashboard_list_students.php">List students</a>
                                <a href="createnew_student.php">Create Students</a>

                            </div>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Appointment</span></a>
                            <div class="dropdown-content">
                                <a href="dashboard_list_appointment.php">List Appountment</a>

                            </div>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i class="fas fa-filter"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Filter</span></a>
                            <div class="dropdown-content">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Grade</a>
                                <ul  class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="dashboard_filter_grades_listgrades.php">list Grade</a></li>
                                    <li><a class="dropdown-item" href="gradecreate.php">Create Grade</a></li>
                                </ul>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                                <ul  class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <li ><a class="dropdown-item" href="dashboard_filter_catogries_listcatogries.php">list Category</a></li>
                                    <li><a class="dropdown-item" href="categorycreate.php">Create Category</a></li>
                                </ul>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Subject</a>
                                <ul  class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <li ><a class="dropdown-item" href="dashboard_filter_subject_listsubject.php">list subject</a></li>
                                    <li><a class="dropdown-item" href="subjectcreate.php">Create subject</a></li>
                                </ul>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Topics</a>
                                <ul  class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <li ><a class="dropdown-item" href="dashboard_filter_topic_listtopic.php">list Topics</a></li>
                                    <li><a class="dropdown-item" href="topicscreate.php">Create Topics</a></li>
                                </ul>
                                <!-- <a href="#">Category</a>
                                <a href="#">Subject</a>
                                <a href="#">Link</a> -->
                            </div>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i class="fas fa-text-height"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Classes</span></a>
                            <div class="dropdown-content">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Group Classes</a>
                                <ul  class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="dashboard_classes_groupclasses-listgroupclasses.php">list  group Classes</a>
                                    <a class="dropdown-item" href="#">Create  groupClasses</a>
                                </ul>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Topics</a>
                                <ul  class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="dashboard_classes_cource_lostcource.php">list Course</a>
                                    <a class="dropdown-item" href="group_courses_create.php">Create Course</a>
                                </ul>
                                <!-- <a href="#">Group Classes</a>
                                <a href="#">Cource</a> -->

                            </div>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i style="margin-top:5px;" class="fas fa-percentage"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Coupons</span></a>
                            <div class="dropdown-content">
                                <a href="dashboard_coupen_listcoupen.php">List coupons</a>
                                <a href="createnew_coupons.php">Create new</a>

                            </div>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i style="margin-top:5px;" class="fas fa-envelope"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Pages</span></a>
                            <div class="dropdown-content">
                                <a href="dashboard_pages_listpages.php">List page</a>
                                <a href="createnew_pages.php">create page</a>

                            </div>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;





                    <i style="margin-top:5px;" class="far fa-money-bill-alt"></i>
                    <div class="dropdown">
                        <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Earnings Satts</span></a>
                        <div class="dropdown-content">
                            <a href="dashboard_earning_stats.php">Earning stats</a>

                        </div>
                    </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;







                    <i style="margin-top:5px;" class="fas fa-user-alt"></i>
                    <div class="dropdown">
                        <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">Profile</span></a>
                        <div class="dropdown-content">
                            <a href="profile.php">My Profile</a>
                            <a href="#">Logout</a>

                        </div>
                    </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>