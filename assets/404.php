<?php require_once("../inc_processes/session.php");?>
<?php require_once("../inc_processes/profile_process.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>404 Page not found</title>
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

  <body style="background-image: url('../includes/404.jpg'); background-size: cover;">
    <!--Nav included as external file-->
    <?php include("nav.php"); ?>
    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h1 style="font-size: 140pt; color:#ff0f57;">404</h1>
          <p style="color: white;">Opps you seem to have lost your way <br> Help you find your way</p>
          <br>
          <a href="explore.php" class="btn btn-default" style="background-color:#ff014d; color: white; text-decoration: none; padding: 15px;">Way back home</a>
        </div>
      </div>
    </div>
<!--Footer included as external file-->
<?php include("footer.php"); ?>