<?php
include('server.php')
?>
<?php
$user_id = $_POST['user'];
$sql = "SELECT R_id,user,friend,username,d_title,organization,profilepic FROM requests INNER JOIN connectin_users ON requests.user=connectin_users.c_u_id WHERE requests.friend=$user_id";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $output .= '<li class="menu">


  <div class="user-summary  is-new style="padding-left:10px;">
    <div class="avatar-header">
      <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($row['profilepic']) . '" class="user-avatar-left">
      <div class="badge new-message">&nbsp;</div>
    </div>
    <div class=" user-detail text-left">
    <a href="dashboard.php?req=' . $row['R_id'] . '">
      <h4 class="user-name text-truncate" title="2062466">' . $row['username'] . '</h4></a>
      <p class="user-description text-truncate  icon--white" style="white-space: nowrap;"><span>' . $row['d_title'] . '</span><span> at ' . $row['organization'] . '</span></p>
      <div style="display:flex;">
      <a href="decline-request.php?id='.$row['R_id'].'" style="border-radius:5px;background:red;color:white;margin-top:10px;margin-right:10px;">
      Decline</a>
      <a href="accept-request.php?id='.$row['R_id'].'"  style="border-radius:5px;background:green;color:white;margin-top:10px;">
      Accept</a>
      </div>
      <!-- <div class="text-truncate text-secondary font-weight-bold">Pardon?</div> -->
    </div>
    <!--  <div class="time-in-timeline"><span>Tuesday</span></div> -->
  </div>

</li>';
}
echo $output;
?>
