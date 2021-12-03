<?php
include('server.php')
?>
<?php
$sql = "SELECT * FROM connectin_users";
$result = mysqli_query($db, $sql);
$output = "";
while ($row = mysqli_fetch_assoc($result)) {
  $sql2 = 'SELECT DISTINCT interest FROM interests WHERE c_u_id=' . $row['c_u_id'];
  $sql3 = 'SELECT DISTINCT goal FROM goals WHERE c_u_id=' . $row['c_u_id'];
  $result2 = mysqli_query($db, $sql2);
  $result3 = mysqli_query($db, $sql3);
  $output .= '<div onclick="onprofileclick(event,' . $row['c_u_id'] . ')">
    <div data-id="' . $row['c_u_id'] . '" class="profileCard">
      <div class="imgDv"><img src="data:image/jpg;charset=utf8;base64,' . base64_encode($row['profilepic']) . '" alt="" height="20"/></div>
      <h4>' . $row['username'] . '</h4> 
      <p>
        <span>
          <b>Interests :</b>';

  while ($row2 = mysqli_fetch_assoc($result2)) {
    $output .= $row2['interest'] . ',';
  }
  $output .= '  
        </span><br>
        <b>Goals:</b> ';

  while ($row3 = mysqli_fetch_assoc($result3)) {
    $output .= $row3['goal'] . ',';
  }

  $output .= ' <br>
       
      </p>

       
      <p class="aboutMe">
      
     
      <i style="font-size:24px" class="fa" style="color:blue">&#xf234;</i>
      
      </p>
    

      </div>

      

  
</div>  ';
}
echo $output;
?>