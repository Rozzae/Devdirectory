<?php require_once("../inc_processes/session.php"); ?>
<?php require_once("../inc_processes/connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Change Password</title>
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
      <a class="navbar-brand" href="explore.php">
        <img src="../img/logo/logo.png" alt="logo" style="width:70px;"> Devdirectory.oi
      </a> 
    </nav>
    <?php
      if (isset($_GET['alert'])){
          echo '
          <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Failed</strong> Your Current Password Doest Match.
          </div>
        ';
      }
    ?>
    <br>
    <br>
    <?php
      if(isset($_SESSION['id'])){
        echo '
            <div class="container">
            <div class="row">
              <div class="col-sm-6 text-center">
                <img src="../img/logo/logo.png" width="300" alt="logo"/>
                <br>
                <h6>Change Password</h6>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing<br> elit, sed do eiusmod tempor incididunt ut labore <br> dolore magna aliqua.</p>
                <br>
                <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
              </div>
            <div class="col-sm-4 text-center">
              <br>
              <br>
              <!-- Tab panes -->
              <form action="../inc_processes/reset_password.php?" method="POST">
                <img src="../img/icons/user-3.png" alt="avatar" width="80"/>
                <br>
                <br>
                <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
                <br>
                <input type="password" class="form-control" name="current_pword" placeholder="Current Password" id="username" required>
                <br>
                <input type="password" class="form-control" name="new_pword" placeholder="New Password" id="username" required>
                <br>
                <input type="password" class="form-control" name="new_pword2" placeholder="Re-type Password" id="password" required>
                <br>
                <button style="padding: 15px; background: #f30c32;" type="submit" class="btn btn-block btn-danger" name="newchange" id="craete-account">Change Password</button>
                <br>
              </form>
            </div>
          </div>
        ';    
      }else{
      
      $token = "";
      if(isset($_GET['token'])){
        $token = $_GET['token'];
        $token2 = md5($token);
        $query = "SELECT * FROM password_tokens WHERE token = '{$token2}' LIMIT 1";
        $result= mysqli_query($connection,$query);
        if (mysqli_num_rows($result) == 1){
          while ($db=mysqli_fetch_row($result)){
            $user_id = $db[2];
          }
          echo '
            <div class="container">
            <div class="row">
              <div class="col-sm-6 text-center">
                <img src="../img/logo/logo.png" width="300" alt="logo"/>
                <br>
                <h6>Change Password</h6>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing<br> elit, sed do eiusmod tempor incididunt ut labore <br> dolore magna aliqua.</p>
                <br>
                <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
              </div>
            <div class="col-sm-4 text-center">
              <br>
              <br>
              <!-- Tab panes -->
              <form action="../inc_processes/reset_password.php" method="POST">
                <img src="../img/icons/user-3.png" alt="avatar" width="80"/>
                <br>
                <br>
                <hr style="width:200px; border: 2px solid rgb(245, 8, 75);">
                <br>
                <input type="password" class="form-control" name="new_pword" placeholder="New Password" id="username">
                <br>
                <input type="password" class="form-control" name="new_pword2" placeholder="Re-type Password" id="password">
                <br>
                <input style="color: white; border: white; height:1px;" type="" class="form-control" name="token" value="'.$token.'" visible="0">
                <button style="padding: 15px; background: #f30c32;" type="submit" class="btn btn-block btn-danger" name="newreset" id="craete-account">Change Password</button>
                <br>
              </form>
            </div>
          </div>
        ';
        }else{
          die('Token Invalid');
        }
      }else{
        die('Token has expired, Click the link in your mail to try again');
      }
    }  
    ?>
  </div>
  <!--Footer included as external file-->
  <?php include("footer.php"); ?>