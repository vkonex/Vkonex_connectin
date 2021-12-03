<?php 
session_start();
  include_once "php/config.php";
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
      <?php 
            $sql = mysqli_query($conn, "SELECT * FROM connectin_users WHERE c_u_id=$myid");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
        <!-- <div class="content">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['profilepic']);?>" alt="">
          <div class="details">
            <span><?php echo $_SESSION['username']; ?></span>
            <p>Active</p>
          </div>
        </div> -->
        <!-- <a href="php/logout.php?logout_id=" class="logout">Logout</a> -->
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>


  <style>
      body{
        position: relative;
        bottom: 210px;
        right:820.5px;
        align-items: center;
        justify-content: center;
        background-color: rgb(239,239,239);
        box-shadow: 0px 0px 0px 0px #aaa;        
      }
      .wrapper{
        box-shadow: none;
        width: 380px;
        min-height: 800px;
        position: relative;
        top:180px; 
      }
    </style>


  <script src="javascript/users.js"></script>

</body>
</html>
