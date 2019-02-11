<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign In</title>
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
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a style="margin-right: 15px;" class="nav-link" href="#">Sign In</a>
          </li>
          <li class="nav-item">
            <a id="btn-create-account" class="nav-link btn-primary btn-md" href="setup-account.php">Create Account</a>
          </li>
        </ul>
      </div>  
    </nav>
    <?php
      if (isset($_GET['logout'])){
        echo '
          <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Congrats</strong> Logged Out Successfully.
          </div>
        ';
      }

      if (isset($_GET['passreset'])){
        echo '
          <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Congrats</strong> Password Changed Successfully.
          </div>
        ';
      }

      if (isset($_GET['alert'])){
        echo '
        <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>You are not logged in</strong> Please login to access page.
        </div>
      ';
      }

      if (isset($_GET['wrongpass'])){
        echo '
          <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong> Wrong Email Or Password.
          </div>
        ';
      }

      if (isset($_GET['success'])){
        echo '
          <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Registered!</strong> Sign Up successfull, login with your details.
          </div>
        ';
      }
    ?>
    <br><br>     
    
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
          <img src="../img/logo/logo.png" width="300" alt="logo"/>
          <br>
          <h6>Sign into your account</h6>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing<br> elit, sed do eiusmod tempor incididunt ut labore <br> dolore magna aliqua.</p>
          <br>
          <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
        </div>
        
        <div class="col-sm-4 text-center">
          <br>
          <br>       
          <!-- Tab panes -->
          <form action="<?php if(isset($_GET['success'])){ echo '../inc_processes/login_process.php?new=1';}else{echo '../inc_processes/login_process.php';}?>" method="POST">
            <img src="../img/icons/user-3.png" alt="avatar" width="80"/>        
            <br>
            <br>
            <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
            <br>
            <input type="email" class="form-control" name="email" placeholder="Email" id="username" required>
            <br>
            <input type="password" class="form-control" name="password" placeholder="Password" id="password" required minlength="5" maxlength="10">
            <br>
            <button style="padding: 15px; background: #f30c32;" type="submit" class="btn btn-block btn-danger" name="login" id="craete-account">Sign In</button>
            <br>
            <a style="color: #f30c32;" href="reset.php"> Forgot Password</a>
          </form>
        </div>
      </div>        
      
     <!--Footer included as external file-->
<?php include("footer.php"); ?>