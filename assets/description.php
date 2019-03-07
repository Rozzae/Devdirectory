<?php require_once("../inc_processes/session.php");?>
<?php require_once("../inc_processes/profile_process.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cloudy Description</title>
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
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <a href="profile.php" class="btn btn-primary btn-lg btn-block" style="padding:13px; background-color: #ff014d; border: none;">View Profile</a>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="custom-container">
            <img src="../assets/portofolio/travel.jpg" class="img-fluid">                                   
            <a href="description.php">
              <div class="overlay">
                <div class="text">
                  <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
                  <b style="margin:15px; color: black; font-size: 18px;">Cloudy Olowusa</b>
                  <br>
                  <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
                  <br>
                  <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                </div>
              </div>
            </a>  
          </div>
          <br><br>
          <img src="../img/icons/heart.png" width="30" alt="using material icons oo no forget guy">
          <b style="color: black; font-size: 15px;">131</b>
          <img style="position: relative; left: 20px;" src="../img/icons/chat-2.png" width="30" alt="using material icons oo no forget guy">
          <b style="color: black; font-size: 15px; position: relative; left: 20px;">11</b>
          <a href="comments.php" style="float: right; text-decoration: none; color: #ff014d; font-weight: bolder;" >View all comments</a>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <a href="chat.php" class="btn btn-primary btn-block" style="padding:20px; background-color: #000000; border: none; color: #ff014d;">Send Message</a>
            <br><br>
            <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
            <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
            <br>
            <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
            <br><br>
            <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
            <a href="" class="btn btn-link" style="color:#ff014d; text-decoration: none; float: right;">Reply</a>
            <br><br>
            <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/58.jpg" width="30" alt="user-1">
            <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
            <br>
            <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
            <br><br>
            <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
            <a href="" class="btn btn-link" style="color:#ff014d; text-decoration: none; float: right;">Reply</a>
            <br><br>
            <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
            <b style="margin:15px; color: black; font-size: 15px;">Cloudy Olowusa</b>
            <br>
            <small style="position: relative; left: 48px; color: black;">UIX Designer</small>
            <br><br>
            <p style="color: black; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
            <a href="" class="btn btn-link" style="color:#ff014d; text-decoration: none; float: right;">Reply</a>
            <br><br><br>
            <form action="" method="">
              <input type="text" class="form-control" style="border: 2px solid black; padding: 20px; border-top: none; border-left: none; border-right: none; border-radius: 0px;">
              <br><br>
              <button type="submit" class="btn btn-primary btn-block" style="padding:20px; background-color: #000000; border: none; color: #ff014d;">Comment Post</button>
            </form>
          </div>
        </div>
      </div>
    <!--Footer included as external file-->
    <?php include("footer.php"); ?>