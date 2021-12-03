<?php
include('server.php')
?>
<?php
    $goals = json_decode($_POST['goals']);
    $interests = json_decode($_POST['interests']);
    $sql = "SELECT DISTINCT username,connectin_users.c_u_id AS id FROM goals INNER JOIN connectin_users ON goals.c_u_id=connectin_users.c_u_id WHERE ";
    for ($i = 0; $i < count($goals); $i++) {
        $goal = $goals[$i];
        if($i != 0){
            $sql .=" OR ";
        }
        $sql .= "goal LIKE '%$goal%'";
    }
    $result = mysqli_query($db, $sql);
    $id ="";
    $users= "";
    while ($row = mysqli_fetch_array($result)) {
       $users .= $row['username'];
       $id .=$row['c_u_id'];
       $users .= ",";
       $id .=",";
    }



    $sql = "SELECT DISTINCT username,connectin_users.c_u_id AS id FROM interests INNER JOIN connectin_users ON interests.c_u_id=connectin_users.c_u_id WHERE ";
    for ($i = 0; $i < count($interests); $i++) {
        $interest = $interests[$i];
        if($i != 0){
            $sql .=" OR ";
        }
        $sql .= "interest LIKE '%$interest%'";
    }
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $users .=  $row['username'];
        $id .= $row['c_u_id'];
        $id .=",";
        $users .= ",";
    }
    echo $users;
    echo $id;
   
?>