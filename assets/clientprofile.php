<?php require_once("../inc_processes/session.php");?>
<?php require_once("../inc_processes/profile_process.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cloudbirdy Profile</title>
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
        <?php

            if (!$_SESSION['id']){
                header('location: ../assets/sign-in.php?alert=1');
            }
        ?>
        <?php
            $query = "SELECT * FROM clients WHERE client_id = '{$userid}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            while ($db=mysqli_fetch_row($result)){
                $pics = $db[4];
            }
        ?>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="explore.php">
                <img src="../img/logo/logo.png" alt="logo" style="width:70px;"> Devdirectory.oi
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a style="margin-right: 15px; color: white;" class="nav-link" href="messages.php"> Messages <span style="background-color: #ff014d; color: white;" class="badge badge-light"> 4</span></a>
                    </li>
                    <li class="nav-item">
                        <a style="margin-right: 15px; color: white;" class="nav-link" href="workoffers.php"> Work Offers <span style="background-color: #ff014d; color: white;" class="badge badge-light"> 10</span></a>
                    </li>
                    <li class="nav-item">
                    <a style="margin-right: 15px; color: white;" class="nav-link" href="#"><img src="../img/avatars/user.png" width="30" alt="user"/> Hi, <?php echo $username;?></a>   
                    </li>               
                    <li class="nav-item">
                    <a id="btn-create-account" class="nav-link btn-primary btn-md" href="gopro.php">Go Premuim</a>
                    </li>
                </ul>
            </div>  
        </nav>
        <?php
            if (isset($_GET['passchange'])){
                echo '
                    <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Done</strong> Password Changed Successfully.
                    </div>
                ';
            }
        ?>
        <div class="container">
            <div class="row">
                <div style="background-color: rgba(195, 195, 195, 0.088); border: 1px solid rgb(172, 172, 172); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 800px;" class="col-sm-4 text-center">
                    <br><br>
                    <img src="../img/avatars/user.png" width="100" alt="user-profile-picture"/>
                    <br><br>
                    <h5><?php echo $username;?></h5>
                    <br>
                    <a href="" class="btn btn-default" style="color:#ff014d; background-color: black; text-decoration: none; width: 150px;">Add Photo</a>
                    <br><br>
                    <p>Hi am Maze Alizre from Abuja, Nigeria i am a uix Designer with 3 years of work level, have skill in html css and javascript and photoshop</p> 
                    <br><br>
                    <hr style="border: 2px solid rgb(230, 13, 49);">
                    <br>
                    <a href="../inc_processes/logout.php" class="btn btn-default" style="color:#ff014d; background-color: black; text-decoration: none; width: 150px;">Sign Out</a>
                    <a href="changepassword.php" class="btn btn-default" style="color:#ff014d; background-color: black; text-decoration: none; width: 150px;">Change Password</a>
                    <br><br><br>
                </div>
                <div class="col-sm-8">
                    <br>
                    <div class="alert alert-success alert-dismissible" style="background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Profile Update Successfull</strong>
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
                                <b style="margin:1px; font-size:13px;">Joy Ogue</b>
                                <br>
                                <small style="position: relative; left: 48px; font-size:13px;">Graphic Designer</small>
                                <br>
                                <br>
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
                                <b style="margin:1px; font-size:13px;">Mark Jone</b>
                                <br>
                                <small style="position: relative; left: 48px; font-size:13px;">IOS Developer</small>
                                <br>
                                <br>
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
                                <b style="margin:1px; font-size:13px;">Cloudy Olowusa</b>
                                <br>
                                <small style="position: relative; left: 48px; font-size:13px;">UIX Designer</small>
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
                                <b style="margin:1px; font-size:13px; font-size:13px;">Jane Freeman</b>
                                <br>
                                <small style="position: relative; left: 48px; font-size:13px;">Graphic Designer</small>
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
                                <b style="margin:1px; font-size:13px;">Joy Ogue</b>
                                <br>
                                <small style="position: relative; left: 48px; font-size:13px;">Graphic Designer</small>
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
                                    <b style="margin:1px; font-size:13px;">Mark Jone</b>
                                    <br>
                                    <small style="position: relative; left: 48px; font-size:13px;">IOS Developer</small>
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
                                    <b style="margin:1px; font-size:13px;">Cloudy Olowusa</b>
                                    <br>
                                    <small style="position: relative; left: 48px; font-size:13px;">UIX Designer</small>
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
                                        <b style="margin:1px; font-size:13px;">Jane Freeman</b>
                                        <br>
                                        <small style="position: relative; left: 48px; font-size:13px;">Graphic Designer</small>
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
                                        <b style="margin:1px; font-size:13px;">Joy Ogue</b>
                                        <br>
                                        <small style="position: relative; left: 48px; font-size:13px;">Graphic Designer</small>
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
                                    <b style="margin:1px; font-size:13px;">Mark Jone</b>
                                    <br>
                                    <small style="position: relative; left: 48px; font-size:13px;">IOS Developer</small>
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
                                    <b style="margin:1px; font-size:13px;">Cloudy Olowusa</b>
                                    <br>
                                    <small style="position: relative; left: 48px; font-size:13px;">UIX Designer</small>
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
                                    <b style="margin:1px; font-size:13px;">Jane Freeman</b>
                                    <br>
                                    <small style="position: relative; left: 48px; font-size:13px;">Graphic Designer</small>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer included as external file-->
        <?php include("footer.php"); ?>