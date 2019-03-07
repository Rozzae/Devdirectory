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
  <title>Disscover top talents</title>
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
    <br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form-inline" action="/action_page.php">
                    <input style="padding: 25px; border-radius: 0px; border: 2px solid rgba(0, 0, 0, 0.564);" class="form-control col-sm-10" type="text" placeholder="Search">
                    <button style="padding: 14px; border-radius: 0px; background-color:#ff014d; width: 150px;" class="btn btn-success" type="submit">Search</button>
                </form>
                <br>
                <h2 style="color:#ff014d; font-weight:bold;">Disscover Everything from one place</h2>    
                <p>Get your project started with the right team.</p>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">            
        <div class="row">
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="../assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                    <a href="description.php">
                        <div class="overlay">
                            <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">231</b>
                                <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">31</b>
                            </div>
                        </div>
                    </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/17.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Joy Ogue</b>
                <br>
                <small style="position: relative; left: 48px;">Graphic Designer</small>
                <br><br>
            </div>
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="../assets/portofolio/fullmobile.jpg" class="img-fluid">                                   
                    <a href="description.php">
                        <div class="overlay">
                            <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">431</b>
                                <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">56</b>
                            </div>
                        </div>
                    </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/41.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Mark Jone</b>
                <br>
                <small style="position: relative; left: 48px;">IOS Developer</small>
                <br><br>
            </div>
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="../assets/portofolio/travel.jpg" class="img-fluid">                                   
                    <a href="description.php">
                        <div class="overlay">
                            <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">131</b>
                                <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">11</b>
                            </div>
                        </div>
                    </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Cloudy Olowusa</b>
                <br>
                <small style="position: relative; left: 48px;">UIX Designer</small>
                <br><br>
            </div>
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="../assets/portofolio/fullmountain.jpg" class="img-fluid">                                   
                    <a href="description.php">
                        <div class="overlay">
                            <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">231</b>
                                <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">31</b>
                            </div>
                        </div>
                    </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/58.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Jane Freeman</b>
                <br>
                <small style="position: relative; left: 48px;">Graphic Designer</small>
                <br><br>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">            
        <div class="row">
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="../assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                    <a href="description.php">
                        <div class="overlay">
                            <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">231</b>
                                <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">31</b>
                            </div>
                        </div>
                    </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/17.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Joy Ogue</b>
                <br>
                <small style="position: relative; left: 48px;">Graphic Designer</small>
                <br><br>
            </div>
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="../assets/portofolio/fullmobile.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                    <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">431</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">56</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/41.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Mark Jone</b>
                    <br>
                    <small style="position: relative; left: 48px;">IOS Developer</small>
                    <br><br>
                </div>
                <div class="col-sm-3">
                    <div class="custom-container">
                        <img src="../assets/portofolio/travel.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                    <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">131</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">11</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Cloudy Olowusa</b>
                    <br>
                    <small style="position: relative; left: 48px;">UIX Designer</small>
                    <br><br>
                </div>
                <div class="col-sm-3">
                    <div class="custom-container">
                        <img src="../assets/portofolio/fullmountain.jpg" class="img-fluid">                                   
                            <a href="description.php">
                                <div class="overlay">
                                    <div class="text">
                                        <!-- Dont forget to replace the img icons with material google icons -->
                                        <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">231</b>
                                        <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">31</b>
                                    </div>
                                </div>
                            </a>  
                        </div>
                        <br>
                        <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/58.jpg" width="30" alt="user-1">
                        <b style="margin:15px;">Jane Freeman</b>
                        <br>
                        <small style="position: relative; left: 48px;">Graphic Designer</small>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container">            
                <div class="row">
                    <div class="col-sm-3">
                        <div class="custom-container">
                            <img src="../assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                            <a href="description.php">
                                <div class="overlay">
                                    <div class="text">
                                        <!-- Dont forget to replace the img icons with material google icons -->
                                        <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">231</b>
                                        <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">31</b>
                                    </div>
                                </div>
                            </a>  
                        </div>
                        <br>
                        <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/17.jpg" width="30" alt="user-1">
                        <b style="margin:15px;">Joy Ogue</b>
                        <br>
                        <small style="position: relative; left: 48px;">Graphic Designer</small>
                        <br><br>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-container">
                            <img src="../assets/portofolio/fullmobile.jpg" class="img-fluid">                                   
                            <a href="description.php">
                                <div class="overlay">
                                    <div class="text">
                                        <!-- Dont forget to replace the img icons with material google icons -->
                                        <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">431</b>
                                        <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">56</b>                            
                                        </div>
                                    </div>
                                </a>  
                            </div>
                        <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/41.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Mark Jone</b>
                    <br>
                    <small style="position: relative; left: 48px;">IOS Developer</small>
                    <br><br>
                </div>
                <div class="col-sm-3">
                    <div class="custom-container">
                    <img src="../assets/portofolio/travel.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">131</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">11</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Cloudy Olowusa</b>
                    <br>
                    <small style="position: relative; left: 48px;">UIX Designer</small>
                    <br><br>
                </div>
                <div class="col-sm-3">
                    <div class="custom-container">
                        <img src="../assets/portofolio/fullmountain.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">231</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">31</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/58.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Jane Freeman</b>
                    <br>
                    <small style="position: relative; left: 48px;">Graphic Designer</small>
                    <br><br>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container">            
            <div class="row">
                <div class="col-sm-3">
                    <div class="custom-container">
                        <img src="../assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                    <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">231</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">31</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/17.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Joy Ogue</b>
                    <br>
                    <small style="position: relative; left: 48px;">Graphic Designer</small>
                    <br><br>
                </div>
                <div class="col-sm-3">
                    <div class="custom-container">
                        <img src="../assets/portofolio/fullmobile.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                    <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">431</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">56</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/41.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Mark Jone</b>
                    <br>
                    <small style="position: relative; left: 48px;">IOS Developer</small>
                    <br><br>
                </div>
                <div class="col-sm-3">
                    <div class="custom-container">
                        <img src="../assets/portofolio/travel.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                    <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">131</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">11</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/43.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Cloudy Olowusa</b>
                    <br>
                    <small style="position: relative; left: 48px;">UIX Designer</small>
                    <br><br>
                </div>
                <div class="col-sm-3">
                    <div class="custom-container">
                        <img src="../assets/portofolio/fullmountain.jpg" class="img-fluid">                                   
                        <a href="description.php">
                            <div class="overlay">
                                <div class="text">
                                    <!-- Dont forget to replace the img icons with material google icons -->
                                    <img src="../img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">231</b>
                                    <img src="../img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                    <b style="color: black; font-size: 15px;">31</b>
                                </div>
                            </div>
                        </a>  
                    </div>
                    <br>
                    <img style="border-radius: 50px; position: relative; top: 5px;" src="../img/avatars/58.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Jane Freeman</b>
                    <br>
                    <small style="position: relative; left: 48px;">Graphic Designer</small>
                    <br><br>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="" class="btn btn-primary btn-lg" style="padding:13px; width:auto; background-color: #ff014d; border: none;">View more developers and designers </a>
                </div>
            </div>
        </div>
<!--Footer included as external file-->
<?php include("footer.php"); ?>