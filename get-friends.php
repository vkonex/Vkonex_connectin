<?php
include('server.php')
?>
<?php
$user_id = $_POST['user'];
$sql = "SELECT user,friend,username,d_title,organization,profilepic FROM friends INNER JOIN connectin_users ON friends.friend=connectin_users.c_u_id WHERE friends.user=$user_id";
$result = mysqli_query($db, $sql);
$sql2 = "SELECT user,friend,username,d_title,organization,profilepic FROM friends INNER JOIN connectin_users ON friends.user=connectin_users.c_u_id WHERE friends.friend=$user_id";
$result2 = mysqli_query($db, $sql2);
$sql3 = "SELECT * FROM  connectin_users WHERE status='active'";
$result3 = mysqli_query($db, $sql3);
$user_list = array();
$output = '<p style="text-align:center;font-weight:bold;margin-top:5px;">My Friends</p>';
while ($row = mysqli_fetch_assoc($result)) {
  if (!in_array($row['username'], $user_list)) {
    $user_list[] = $row['username'];
    $output .= '<li class="menu">
<a href="http://65.0.131.51/dashboard.php?chat=' . $row['friend'] . '">

  <div class="user-summary  is-new">
    <div class="avatar-header">
      <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($row['profilepic']) . '" class="user-avatar-left">
      <div class="badge new-message">&nbsp;</div>
    </div>
    <div class=" user-detail text-left">
      <h4 class="user-name text-truncate" title="2062466">' . $row['username'] . '</h4>
      <p class="user-description text-truncate  icon--white" style="white-space: nowrap;"><span>' . $row['d_title'] . '</span><span> at ' . $row['organization'] . '</span></p>
      <!-- <div class="text-truncate text-secondary font-weight-bold">Pardon?</div> -->
    </div>
    <!--  <div class="time-in-timeline"><span>Tuesday</span></div> -->
  </div>
</a>
</li>';
  }
}
while ($row = mysqli_fetch_assoc($result2)) {
  if (!in_array($row['username'], $user_list)) {
    $user_list[] = $row['username'];
    $output .= '<li class="menu">
<a href="http://65.0.131.51/dashboard.php?chat=' . $row['user'] . '">

  <div class="user-summary  is-new">
    <div class="avatar-header">
      <img src="data:image/jpg;charset=utf8;base64,' . base64_encode($row['profilepic']) . '" class="user-avatar-left">
      <div class="badge new-message">&nbsp;</div>
    </div>
    <div class=" user-detail text-left">
      <h4 class="user-name text-truncate" title="2062466">' . $row['username'] . '</h4>
      <p class="user-description text-truncate  icon--white" style="white-space: nowrap;"><span>' . $row['d_title'] . '</span><span> at ' . $row['organization'] . '</span></p>
      <!-- <div class="text-truncate text-secondary font-weight-bold">Pardon?</div> -->
    </div>
    <!--  <div class="time-in-timeline"><span>Tuesday</span></div> -->
  </div>
</a>
</li>';
  }
}
echo $output;
?>
