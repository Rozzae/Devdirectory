<?php require_once("../inc_processes/session.php");?>
<?php require_once("../inc_processes/profile_process.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/learnmore.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="../bs/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../bs/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="../bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </head>

  <body>
    <!--Nav included as external file-->
    <?php include("nav.php"); ?>
    <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Congrats</strong> You have just Hired Maze Alizre.
    </div>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <img src="../img/avatars/17.jpg">
          <br>
          <br>
          <p>Abuja, Nigeria</p>
          <h1>Maze Alizre</h1>
          <p style="color:#ff014d; font-weight: bold;">Graphic Designer</p>
          <p>Hi am Maze Alizre from Abuja, Nigeria i am a uix Designer<br> with 3 years of work level </p>
          <br>
          <button type="button" class="btn btn-default" style="background-color: black; color: #f30c32; padding: 15px; width: 150px; width: auto;">Employ Maze Alize</button>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="jumbotron" style="background: linear-gradient(to right, #ff2b94 , #f30c32); border-radius: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <br>
            <br>
            <br>
            <h1 style="color: white;">Work Level</h1>
            <br>
            <span class="badge badge-light"style="background-color: black; color: #f30c32; padding: 15px; width: 150px;">Beginner</span>
            <span class="badge badge-light"style="background-color: black; color: white; padding: 15px; width: 150px;">Intermidate</span>
            <span class="badge badge-light"style="background-color: black; color: white; padding: 15px; width: 150px;">Pro</span>
            <span class="badge badge-light"style="background-color: black; color: white; padding: 15px; width: 150px;">God</span>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <br>
          <br>
          <br>
          <h1 style="color: rgb(0, 0, 0);">Skill Set</h1>
          <br>
          <span class="badge badge-light"style="background-color: black; color: white; padding: 15px; width: 150px;">HTML</span>
          <span class="badge badge-light"style="background-color: black; color: white; padding: 15px; width: 150px;">CSS</span>
          <span class="badge badge-light"style="background-color: black; color: white; padding: 15px; width: 150px;">JavaScript</span>
          <span class="badge badge-light"style="background-color: black; color: white; padding: 15px; width: 150px;">PhotoShop</span>
          <br>
          <br>
          <br>
          <br>
          <br>
        </div>
      </div>
    </div>
    <div class="jumbotron" style="background: linear-gradient(to right, #ff2b94 , #f30c32); border-radius: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <br>
            <br>
            <br>
            <h1 style="color: white;">Portfoilo</h1>
            <br>
            <div class="row">
              <div class="col-sm-3">
                <img src="../assets/portofolio/fullkit.jpg" class="img-fluid">
              </div>
              <div class="col-sm-3">
                <img src="../assets/portofolio/fashion.jpg" class="img-fluid">
              </div>
              <div class="col-sm-3">
                <img src="../assets/portofolio/cutekid.jpg" class="img-fluid">
              </div>
              <div class="col-sm-3">
                <img src="../assets/portofolio/travel.jpg" class="img-fluid">
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <img src="../img/logo/logo.png" width="300" alt="logo">
        </div>
      </div>
    </div>
<!--Footer included as external file-->
<?php include("footer.php"); ?>