<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reset Password</title>
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
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="../index.php">
        <img src="../img/logo/logo.png" alt="logo" style="width:70px;"> Devdirectory.oi
      </a>     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <br><br>    
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
          <img src="../img/logo/logo.png" width="300" alt="logo"/>
          <br>
          <h6>Forgot Password</h6>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing<br> elit, sed do eiusmod tempor incididunt ut labore <br> dolore magna aliqua.</p>
          <br>
          <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
        </div>      
        
        <div class="col-sm-4 text-center">
          <br><br>
          <!-- Tab panes -->
          <form action="../inc_processes/reset_password.php" method="POST">
            <img src="../img/icons/user-3.png" alt="avatar" width="80"/>                     
            <br><br>
            <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
            <br>
            <input type="email" class="form-control" name="email" placeholder="Email Address" id="username">
            <br>
            <button style="padding: 15px; background: #f30c32;" type="submit" class="btn btn-block btn-danger" name="resetpassword" id="craete-account">Send Reset Link</button>
            <br>
            <p align="center">I just remembered my password <a style="color: #f30c32;" href="sign-in.php"> Sign In</a></p>
          </form>

        </div> 
      </div>
    </div>
<!--Footer included as external file-->
<?php include("footer.php"); ?>