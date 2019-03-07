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
  <title>Coming Soon</title>
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
<body style="background-image: url('../includes/devdirectorypremium.jpg'); background-size: cover;">
    <!--Nav included as external file-->
    <?php include("nav.php"); ?>
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <img src="../img/logo/logo.png" width="300" alt="logo"/>
                <h1 style="color:#ff0f57;">Devdirectory <b style="color: rgb(255, 255, 255);">Pro</b></h1>
                <p style="color: white;">Coming Soon</p>
                <br>
                <button type="button" class="btn btn-default" style="background-color:#ff014d; color: white; padding: 10px; width: 200px; ">Back Home</button>
            </div>
        </div>
    </div>
    <!--Footer included as external file-->
    <?php include("footer.php"); ?>