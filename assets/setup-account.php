<!DOCTYPE html>
<html lang="en">
<head>
  <title>Set Up Account</title>
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
          <a style="margin-right: 15px;" class="nav-link" href="sign-in.php">Sign In</a>
        </li>
        <li class="nav-item">
          <a id="btn-create-account" class="nav-link btn-primary btn-md" href="#">Create Account</a>
        </li>
      </ul>
    </div>  
  </nav>
  <br>
  <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
          <img src="../img/logo/logo.png" width="300" alt="logo"/>
          <br>
          <h6>Setting Up your account</h6>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing<br> elit, sed do eiusmod tempor incididunt ut labore <br> dolore magna aliqua.</p>
          <br>
          <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
        </div>
        <div class="col-sm-4">
        <br>
        <br>

        <ul class="nav nav-tabs nav-justified">
          <li class="nav-item">
            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0); border: 3px solid #f30c32; border-top: none; border-left: none; border-right: none;" class="nav-link active" data-toggle="tab" href="#guest">Client</a>
          </li>
          <li class="nav-item">
            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0);  border: 3px solid #c00f2d; border-top: none; border-left: none; border-right: none;" class="nav-link" data-toggle="tab" href="#developer">Developer</a>
          </li>
          <li class="nav-item">
            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0);  border: 3px solid #9b0c24; border-top: none; border-left: none; border-right: none;" class="nav-link" data-toggle="tab" href="#designer">Designer</a>
          </li>
        </ul>  

        <!-- Tab panes -->
        <div class="tab-content">
          <div  id="guest" class="container tab-pane active"><br>
            <form action="../inc_processes/reg_process.php" method="POST">
              <br>
              <input type="text" class="form-control" name="fname" placeholder="Full Name" id="username" required>
              <br>
              <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
              <br>
              <input type="password" class="form-control" name="password" placeholder="Password" id="password" minlength="5" maxlength="10" required>
              <br>
              <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="password" minlength="5" maxlength="10" required>
              <br>
              <input type="submit" value="Sign Up" class="btn btn-block btn-danger" name="client" id="craete-account" style="padding: 15px; background: #f30c32;" >
              <br>
              <p align="center">I already have an account <a style="color: #f30c32;" href="sign-in.php"> sign in</a></p>
            </form>
          </div>
          
          <div id="developer" class="container tab-pane fade"><br>
            <form action="../inc_processes/reg_process.php" method="POST">
              <br>
              <input type="text" class="form-control" name="fname" placeholder="First Name" id="username" required>
              <br>
              <input type="text" class="form-control" name="lname" placeholder="Last Name" id="username" required>
              <br>
              <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
              <br>
              <input type="password" class="form-control" name="password" placeholder="Password" id="password" minlength="5" maxlength="10">
              <br>
              <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="password" minlength="5" maxlength="10" required>
              <br>
              <button style="padding: 15px; background: #f30c32;" type="submit" class="btn btn-block btn-danger" name="developer" id="craete-account">Sign Up</button>
              <br>
              <p align="center">I already have an account <a style="color: #f30c32;" href="../../sign-in.php"> sign in</a></p>  
            </form>
          </div>
          
          <div id="designer" class="container tab-pane fade"><br>
            <form action="../inc_processes/reg_process.php" method="POST">
              <br>
              <input type="text" class="form-control" name="fname" placeholder="First Name" id="username" required>
              <br>
              <input type="text" class="form-control" name="lname" placeholder="Last Name" id="username" required>
              <br>
              <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
              <br>
              <input type="password" class="form-control" name="password" placeholder="Password" id="password" minlength="5" maxlength="10" required>
              <br>
              <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" id="password" minlength="5" maxlength="10" required>
              <br>
              <button type="submit" style="padding: 15px; background: #f30c32;" type="submit" class="btn btn-block btn-danger" name="designer" id="craete-account">Sign Up</button>
              <br>
              <p align="center">I already have an account <a style="color: #f30c32;" href="../../sign-in.php"> sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Footer included as external file-->
<?php include("footer.php"); ?>