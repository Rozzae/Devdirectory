<?php require_once("../inc_processes/session.php");?>
<?php require_once("../inc_processes/profile_process.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Work Offers</title>
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
  <?php
    if (!isset($_SESSION['id'])){
      header('location: 404.php');
    }
  ?>
  <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Hey Cloudbridy</strong> You have a job offers, kindly reply with a message response
  </div>
  <br>
  <br>
  <div class="container">
    <div class="list-group">
      <a href="chat.php" id="posted-projects" class="list-group-item">
        <br>
        <div class="row">
          <div class="col-sm-2 text-center">
            <img id="avatars" src="../img/logo/logo.png" width="100"> 
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <button style="background-color: black; color: #ff014d;" type="button" class="btn btn-default btn-sm btn-block"><b>Willam Joe</b></button>
          </div>
          <div class="col-sm-4 text-center">
            <br>
            <p style="color: black;">Willam Joe just offered you work</p> 
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <small style="color: black;">9/24/2018</small>
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <small style="color: black;">12:32</small>
          </div>
        </div>
        <br>
      </a>
      <a href="chat.php" id="posted-projects" class="list-group-item">
        <br>
        <div class="row">
          <div class="col-sm-2 text-center">
            <img id="avatars" src="../img/logo/logo.png" width="100"> 
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <button style="background-color: black; color: #ff014d;" type="button" class="btn btn-default btn-sm btn-block"><b>Lina Arez</b></button>
          </div>
          <div class="col-sm-4 text-center">
            <br>
            <p style="color: black;">Linz Areaz Just offered you work</p> 
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <small style="color: black;">9/24/2018</small>
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <small style="color: black;">12:32</small>
          </div>
        </div>
        <br>
      </a>
      <a href="chat.php" id="posted-projects" class="list-group-item">
        <br>
        <div class="row">
          <div class="col-sm-2 text-center">
            <img id="avatars" src="../img/logo/logo.png" width="100"> 
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <button style="background-color: black; color: #ff014d;" type="button" class="btn btn-default btn-sm btn-block"><b>John Ryze</b></button>
          </div>
          <div class="col-sm-4 text-center">
            <br>
            <p style="color: black;">John Ryze just offered you work</p> 
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <small style="color: black;">9/24/2018</small>
          </div>
          <div class="col-sm-2 text-center">
            <br>
            <small style="color: black;">12:32</small>
          </div>
        </div>
        <br>
      </a>
    </div>
  </div>
  <!--Footer included as external file-->
  <?php include("footer.php"); ?>
