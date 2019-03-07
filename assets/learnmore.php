<?php require_once("../inc_processes/session.php");?>
<?php require_once("../inc_processes/profile_process.php");?>
<?php
    if (isset($_SESSION['id'])){
        $type = $_SESSION['type'];
        $userid = $_SESSION['id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About Devdirectory.oi</title>
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
        <div class="col-sm-12 text-center">
          <img src="../img/logo/logo.png"width="300"alt="logo-meduim"/>
          <h3>Devdirectory.oi</h3>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
            incididunt ut labore dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
          </p>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">    
          <h3>Get to know the Creators</h3>
        </div>
      </div>
    </div>
    <br><br><br>
    <div style="background-color:black; border-radius: 0px;" class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 text-center">
            <img src="../img/avatars/41.jpg"width="80">
            <br><br>
            <h5 style="color:white; font-size: 18px;">Cloudbirdy</h5>
            <br>
            <p style="color:white;">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore dolore magna aliqua.</p>
            <br>
            <img style="padding:5px;" src="../img/social/facebook-logo-button.png" width="30">
            <img style="padding:5px;" src="../img/social/twitter (2).png" width="30">
            <img style="padding:5px;" src="../img/social/instagram (1).png" width="30">
            <br><br>
          </div>
          <div class="col-sm-6 text-center">
            <img src="../img/avatars/17.jpg"width="80">
            <br><br>
            <h5 style="color:white; font-size: 18px;">Samuel</h5>
            <br>
            <p style="color:white;">Lorem ipsum dolor sit amet, consectetur <br>adipisicing elit, sed do eiusmod tempor<br> incididunt ut labore dolore magna aliqua.</p>
            <br>
            <img style="padding:5px;" src="../img/social/facebook-logo-button.png" width="30">
            <img style="padding:5px;" src="../img/social/twitter (2).png" width="30">
            <img style="padding:5px;" src="../img/social/instagram (1).png" width="30">
            <br><br>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">    
          <a href="../index.php" class="btn btn-primary btn-lg" style="padding:13px; width:200px; background-color: #ff014d; border: none;">Back to Home</a>
        </div>
      </div>
    </div>
    <!--Footer included as external file-->
    <?php include("footer.php"); ?>