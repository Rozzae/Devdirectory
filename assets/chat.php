<?php require_once("../inc_processes/session.php");?>
<?php require_once("../inc_processes/profile_process.php");?>
<?php
  if (!isset($_SESSION['id'])){
    header('location: comments.php?chaterror=1');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/styles.css" rel="stylesheet">
  <link href="../css/learnmore.css" rel="stylesheet">
  <link href="../font/all.css" rel="stylesheet">
  
  <link rel="stylesheet" href="../bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="../bs/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../bs/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="../bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <!--Nav included as external file-->
  <?php include("nav.php"); ?>
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>Active Chats</h3>
        <button style="float: right;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
          Clear History
        </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div id="clear-chat" class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Clear chat history</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  This action deletes all your chat history
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Clear</button>
                </div>
              </div>
            </div>
          </div>
          <br>
          <img style="position: relative; top: 5px;" src="../img/avatars/43.jpg" width="40" alt="user-1">
          <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
          <br>
          <small style="position: relative; left: 58px; color: black;">UIX Designer <b style="color:green;"> Online</b></small>
          <br><br>
          <hr style="border: 2px solid #ff014d;">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <br><br>
          <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
          <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
          <br>
          <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
          <br><br>
          <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
          <br><br>
          <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/58.jpg" width="30" alt="user-1">
          <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
          <br>
          <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
          <br><br>
          <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
          <br><br>
          <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
          <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
          <br>
          <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
          <br><br>
          <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
          <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
          <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
          <br>
          <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
          <br><br>
          <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
          <br><br>
          <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/58.jpg" width="30" alt="user-1">
          <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
          <br>
          <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
          <br><br>
          <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
          <br><br>
          <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">  
          <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
          <br>
          <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
          <br><br>
          <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
          <br><br><br>
          <form action="" method="">
            <input type="text" class="form-control" style="border: 2px solid black; padding: 20px; border-top: none; border-left: none; border-right: none; border-radius: 0px;">
            <br><br>
            <button type="submit" class="btn btn-primary btn-block" style="padding:20px; background-color: #000000; border: none; color: #ff014d;">Send Message</button>
          </form>
          <br><br><br>
        </div>
<!--Footer included as external file-->
<?php include("footer.php"); ?>