<?php
include('server.php')
?>
<?php
$searchTerm = $_POST['searchTerm'];
$sql = "SELECT * FROM connectin_users WHERE username LIKE '%{$searchTerm}%'";
$result = mysqli_query($db, $sql);
$output = "";
while($row =mysqli_fetch_assoc($result))
{
    $output .= '<div onclick="onprofileclick(event,'. $row['c_u_id'] .')">
    <div data-id="'. $row['c_u_id'] .'" class="profileCard">
      <div class="imgDv"><img src="data:image/jpg;charset=utf8;base64,'. base64_encode($row['profilepic']) .'" alt="" height="20"/></div>
      <h4>'. $row['username'] .'</h4> 
      <p>
        <span>
          <b>About :</b>'. $row['bio'] .'  
        </span><br>
        <b>Company:</b> '. $row['organization'] .' <br>
        <b>Location:</b> '. $row['location'] .'
      </p>

       
      <p class="aboutMe">
      
     
      <i style="font-size:24px" class="fa" style="color:blue">&#xf234;</i>
      
      </p>
    

      </div>

      

  
</div>  ';
}
echo $output;
?>