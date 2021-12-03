<div class="side" id="side">
<?php include_once "users.php"; ?>
</div>

<div class="box">
<div class="Chat1" id="Chat1">
<?php
session_start();
include('./php/config.php')
?>
<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header class="header">
        <?php
        $user_id = $_GET['user_id'];
        $query = "SELECT * FROM connectin_users WHERE c_u_id=$user_id";
        $results = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($results);
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($user['profilepic']);?>" alt="">
        <div class="details">
          <span><?php echo $user['username']; ?></span>
          <p>Active</p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area" enctype="multipart/form-data">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input type="file" name="file" id="file-upload" onchange="upload_file(event)" hidden />
        <label for="file-upload" style="margin:auto 5px;border-radius:5px;"><i style="font-size:20px;" class="fas fa-paperclip"></i></label>
        <button class="label"><i class="fab fa-telegram-plane"></i></button>
        
      </form>
      <p id="label-file" style="margin-left:35px;position:absolute;bottom:85px;"></p>
    </section>
  </div>
  </div>
  </div>
  <div class="box"></div>

  <style>
      body{
        position: relative;
        bottom: 112px;
        align-items: center;
        justify-content: center;
        width:900px;
        left: 200px;
       background-color: rgb(239,239,239);
       /* background-color: white; */
      
      }

      .side{
        position: relative;
        right: 280px;
        bottom: 180px;
      }
      .Chat1{       
        position: relative;  
        right:270px;  
      
        bottom:160px;  
      }
      .wrapper{
        box-shadow: none;
        width: 380px;
        /* width:960px; */
        min-height: 600px;  
        
      }


      .chat-area{
        height:200px;
        width: 765px;
      }
      .chat-box{
        width:765px;
  position: relative;
  min-height: 400px;
  max-height: 400px;
  overflow-y: auto;
  padding: 10px 30px 20px 30px;
  background: #f7f7f7;
  box-shadow: inset 0 32px 32px -32px rgb(0 0 0 / 5%),
              inset 0 -32px 32px -32px rgb(0 0 0 / 5%);
}
    </style>

  <script src="javascript/chat.js"></script>

</body>

</html>