<?php
include('server.php')
?>
<?php

 

    $j_title = $_GET['j_title'];
    $Company = $_GET['Company'];
    $work_policy = $_GET['work_policy'];
    $job_location = $_GET['job_location'];
    $emp_type = $_GET['emp_type'];
    $experiance = $_GET['experiance'];
    $Skills = $_GET['Skills'];
    $j_description = $_GET['j_description'];
    $ctc=$_GET['ctc'];
    $username = $_SESSION['username'];


    $user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        $user_id = $user['c_u_id'];

        $sql2 = "SELECT * FROM post_jobs WHERE c_u_id=$user_id AND j_title='$j_title' AND company='$Company'";
        $result2 = mysqli_query($db, $sql2);
        if (mysqli_num_rows($result2) > 0) {
            echo "Already added";
        } else {
            $sql = "INSERT INTO post_jobs (c_u_id,j_title,company,j_workplace_policy,j_location,j_emp_type,j_exp_required,j_skills_required,j_description,CTC) VALUES ($user_id,'$j_title','$Company','$work_policy','$job_location','$emp_type','$experiance','$Skills','$j_description',$ctc)";
            $result = mysqli_query($db, $sql);
            
        }
        header('location:http://65.0.131.51/profile.php');
    } else {
        echo "Failed";
    }

?>