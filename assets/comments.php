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
  <title>All Comments</title>
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
    if (isset($_GET['chaterror'])){
      echo '
        <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Error! </strong>You need to be Logged in to chat. <a href="sign-in.php">LOGIN HERE</a>
        </div>
      ';
    }
  ?>
  <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>All comments</h3>
        <br>
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
          <br>
          <br>
          <button type="submit" class="btn btn-primary btn-block" style="padding:20px; background-color: #000000; border: none; color: #ff014d;">Comment Post</button>
        </form>
      </div>
      <div class="col-sm-6 text-center">
        <img style="position:fixed; right: 30px;" src="../img/logo/logo.png" width="350">
      </div>
    </div>
  </div>
  <!--Footer included as external file-->
  <?php include("footer.php"); ?>