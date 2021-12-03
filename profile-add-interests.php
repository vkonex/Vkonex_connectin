<?php
include('server.php')
?>
<?php
$interests = $_POST['interests'];
$interest_arr = explode(",", $interests);
$username = $_SESSION['username'];
$user_check_query = "SELECT * FROM connectin_users WHERE username='$username' LIMIT 1";
$user_check_interest = "SELECT * FROM interests WHERE username='$username'";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
$result2 = mysqli_query($db, $user_check_interest);
$user2 = mysqli_fetch_array($result2);
$num = mysqli_num_rows($result2);
$num = 3 - (int)$num;
if ($user) { // if user exists
    $user_id = $user['c_u_id'];
    // $sql = "UPDATE connectin_users SET bio='$bio' WHERE c_u_id=$user_id";
    // $result = mysqli_query($db, $sql);
    $sql = "";
    for ($i = 0; $i < count($interest_arr); $i++) {
        if ($i > $num) {
            continue;
        }
        $interest = $interest_arr[$i];
        $sql .= "INSERT INTO interests (c_u_id,interest) VALUES ($user_id,'$interest');";
    }
    mysqli_multi_query($db, $sql);
    echo "success";
} else {
    echo "Failed";
}

?>