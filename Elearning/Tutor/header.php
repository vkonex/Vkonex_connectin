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
    <nav class="navbar navbar-expand-lg mt-4 " style="margin-bottom:100px;">
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
                            <a class="dropbtn .dar" style="text-decoration: none;" href="dashboard_analytics.php"><span style="font-weight: bold;">&nbsp;</span></a>
                            <div class="dropdown-content">
                        </div>

                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item">
                        &nbsp;
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">&nbsp;</span></a>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <li class="nav-item">
                        
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">&nbsp;</span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">&nbsp;</span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                    <li class="nav-item">
                        
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">&nbsp;</span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;







                    <li class="nav-item">
                        
                        <div class="dropdown">
                            <a class="dropbtn .dar" style="text-decoration: none;"><span style="font-weight: bold;">&nbsp;</span></a>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                    <i class="fas fa-book"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" href="manage-cource.php" style="text-decoration: none;"><span style="font-weight: bold;">Manage Cource</span></a>
                        </div>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i class="fas fa-filter"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" href="allstudents.php" style="text-decoration: none;"><span style="font-weight: bold;">Student List</span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                    <i class="fas fa-text-height"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" href="assignment.php" style="text-decoration: none;"><span style="font-weight: bold;">Assignment</span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                    <li class="nav-item">
                    <i class="fas fa-list"></i>
                        <div class="dropdown">
                            <a class="dropbtn .dar" href="invite.php" style="text-decoration: none;"><span style="font-weight: bold;">Student invite</span></a>
                    </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <li class="nav-item">
                        <i class="fas fa-user"></i>
                        
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