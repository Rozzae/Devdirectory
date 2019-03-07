<?php require_once("/inc_processes/session.php");?>
<?php require_once("/inc_processes/profile_process.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Creative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="font/all.css">
  <script src="bs/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="bs/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src=" bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo/logo.png" alt="logo" style="width:70px;"> Devdirectory.oi
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a style="margin-right: 15px;" class="nav-link" href="assets/sign-in.php">Sign In</a>
                </li>
                <li class="nav-item">
                <a id="btn-create-account" class="nav-link btn-primary btn-md" href="assets/setup-account.php">Create Account</a>
                </li>
            </ul>
        </div>  
    </nav>
    <div class="jumbotron"id="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <br>
                    <br>
                    <h1 class="jobs">Best Job Hire Site</h1>
                    <h3 class="nigeria">For Developers and Designers In Nigeria</h3>
                    <br>
                    <a href="assets/setup-account.php" class="btn btn-primary btn-lg" style="padding:13px; width:200px; background-color: #ff014d; border: none;">Set Up Account</a>
                    <br>
                    <br>
                    <br>                
                </div>      
                <div class="col-sm-6 text-center"> 
                    <div class="extra-align">
                        <br>                            
                        <br>
                        <br>
                        <img src="img/logo/logo.png" id="logo-large">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 style="color:#ff014d; font-weight:bold;">Explore</h2>                      
                <p>Works for Designers and Developers across nigeria.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container">            
        <div class="row">
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                    <a href="assets/description.php">
                        <div class="overlay">
                            <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">231</b>
                                <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">31</b>
                            </div>
                        </div>
                    </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/17.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Joy Ogue</b>
                <br>
                <small style="position: relative; left: 48px;">Graphic Designer</small>
                <br>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                <br>
                <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                <b style="margin:15px;">Location</b>
                <br>
                <small style="position: relative; left: 48px;">Abuja Nigeria</small>
            </div>  
            <div class="col-sm-3">
                <div class="custom-container">
                    <img src="assets/portofolio/fullmobile.jpg" class="img-fluid">                                   
                    <a href="assets/description.php">
                        <div class="overlay">
                            <div class="text">
                                <!-- Dont forget to replace the img icons with material google icons -->
                                <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">431</b>
                                <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                <b style="color: black; font-size: 15px;">56</b>
                            </div>
                        </div>
                    </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/41.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Mark Jone</b>
                <br>
                <small style="position: relative; left: 48px;">IOS Developer</small>
                <br>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                <br>
                <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                <b style="margin:15px;">Location</b>
                <br>
                <small style="position: relative; left: 48px;">Lagos Nigeria</small>
            </div>
            <div class="col-sm-3">
            <div class="custom-container">
                <img src="assets/portofolio/travel.jpg" class="img-fluid">                                   
                <a href="assets/description.php">
                    <div class="overlay">   
                        <div class="text">
                            <!-- Dont forget to replace the img icons with material google icons -->
                            <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                            <b style="color: black; font-size: 15px;">131</b>
                            <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                            <b style="color: black; font-size: 15px;">11</b>
                        </div>
                    </div>
                </a>  
            </div>
            <br>
            <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/43.jpg" width="30" alt="user-1">
            <b style="margin:15px;">Cloudy Olowusa</b>
            <br>
            <small style="position: relative; left: 48px;">UIX Designer</small>
            <br>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
            <br>
            <img src="img/icons/placeholder.png" alt="locator"width="30"/>
            <b style="margin:15px;">Location</b>
            <br>
            <small style="position: relative; left: 48px;">Edo Nigeria</small>
        </div>
        <div class="col-sm-3">
            <div class="custom-container">
                <img src="assets/portofolio/fullmountain.jpg" class="img-fluid">                                   
                <a href="assets/description.php">
                    <div class="overlay">
                        <div class="text">
                            <!-- Dont forget to replace the img icons with material google icons -->
                            <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                            <b style="color: black; font-size: 15px;">231</b>
                            <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                            <b style="color: black; font-size: 15px;">31</b>
                        </div>
                    </div>
                </a>  
            </div>
            <br>
            <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/58.jpg" width="30" alt="user-1">
            <b style="margin:15px;">Jane Freeman</b>
            <br>
            <small style="position: relative; left: 48px;">Graphic Designer</small>
            <br>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
            <br>
            <img src="img/icons/placeholder.png" alt="locator"width="30"/>
            <b style="margin:15px;">Location</b>
            <br>
            <small style="position: relative; left: 48px;">Abuja Nigeria</small>
        </div>
    </div>
</div>
<br>
                <br>
                <div class="container">            
                <div class="row">
                <div class="col-sm-3">
                <div class="custom-container">
                <img src="assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                <a href="assets/description.php">

                <div class="overlay">
                <div class="text">
                <!-- Dont forget to replace the img icons with material google icons -->
                <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                <b style="color: black; font-size: 15px;">231</b>
                <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                <b style="color: black; font-size: 15px;">31</b>


                </div>
                </div>
                </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/17.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Joy Ogue</b>
                <br>
                <small style="position: relative; left: 48px;">Graphic Designer</small>
                <br>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                <br>
                <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                <b style="margin:15px;">Location</b>
                <br>
                <small style="position: relative; left: 48px;">Abuja Nigeria</small>
                </div>
                <div class="col-sm-3">
                <div class="custom-container">
                <img src="assets/portofolio/fullmobile.jpg" class="img-fluid">                                   
                <a href="assets/description.php">

                <div class="overlay">
                <div class="text">
                <!-- Dont forget to replace the img icons with material google icons -->
                <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                <b style="color: black; font-size: 15px;">431</b>
                <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                <b style="color: black; font-size: 15px;">56</b>


                </div>
                </div>
                </a>  
                </div>
                <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/41.jpg" width="30" alt="user-1">
                <b style="margin:15px;">Mark Jone</b>
                <br>
                <small style="position: relative; left: 48px;">IOS Developer</small>
                <br>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                <br>
                <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                <b style="margin:15px;">Location</b>
                <br>
                <small style="position: relative; left: 48px;">Lagos Nigeria</small>
                </div>
                <div class="col-sm-3">
                <div class="custom-container">
                <img src="assets/portofolio/travel.jpg" class="img-fluid">                                   
                <a href="assets/description.php">

                <div class="overlay">
                    <div class="text">
                    <!-- Dont forget to replace the img icons with material google icons -->
                        <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                        <b style="color: black; font-size: 15px;">131</b>
                        <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                        <b style="color: black; font-size: 15px;">11</b>

                    
                    </div>
                </div>
                </a>  
                </div>
    <br>
    <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/43.jpg" width="30" alt="user-1">
    <b style="margin:15px;">Cloudy Olowusa</b>
    <br>
    <small style="position: relative; left: 48px;">UIX Designer</small>
    <br>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
    <br>
    <img src="img/icons/placeholder.png" alt="locator"width="30"/>
    <b style="margin:15px;">Location</b>
    <br>
    <small style="position: relative; left: 48px;">Edo Nigeria</small>
    </div>
    <div class="col-sm-3">
        <div class="custom-container">
            <img src="assets/portofolio/fullmountain.jpg" class="img-fluid">                                   
            <a href="assets/description.php">

                <div class="overlay">
                    <div class="text">
                    <!-- Dont forget to replace the img icons with material google icons -->
                        <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                        <b style="color: black; font-size: 15px;">231</b>
                        <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                        <b style="color: black; font-size: 15px;">31</b>

                    
                    </div>
                </div>
            </a>  
        </div>
    <br>
    <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/58.jpg" width="30" alt="user-1">
    <b style="margin:15px;">Jane Freeman</b>
        <br>
            <small style="position: relative; left: 48px;">Graphic Designer</small>
            <br>
        <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
    <br>
        <img src="img/icons/placeholder.png" alt="locator"width="30"/>
            <b style="margin:15px;">Location</b>
            <br>
                <small style="position: relative; left: 48px;">Abuja Nigeria</small>
                </div>
            </div>
            </div>
                <br>
                <br>
                
                <div class="container">            
                    <div class="row">
                            <div class="col-sm-3">
                                <div class="custom-container">
                                <img src="assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                                    <a href="assets/description.php">

                                        <div class="overlay">
                                            <div class="text">
                                            <!-- Dont forget to replace the img icons with material google icons -->
                                                <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                                <b style="color: black; font-size: 15px;">231</b>
                                                <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                                <b style="color: black; font-size: 15px;">31</b>

                                            
                                            </div>
                                        </div>
                                    </a>  
                                </div>
                            <br>
                        <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/17.jpg" width="30" alt="user-1">
                            <b style="margin:15px;">Joy Ogue</b>
                                <br>
                                <small style="position: relative; left: 48px;">Graphic Designer</small>
                                <br>
                            <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                            <br>
                            <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                                <b style="margin:15px;">Location</b>
                                    <br>
                                        <small style="position: relative; left: 48px;">Abuja Nigeria</small>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="custom-container">
                                            <img src="assets/portofolio/fullmobile.jpg" class="img-fluid">                                   
                                            <a href="assets/description.php">

                                                <div class="overlay">
                                                    <div class="text">
                                                    <!-- Dont forget to replace the img icons with material google icons -->
                                                        <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                                        <b style="color: black; font-size: 15px;">431</b>
                                                        <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                                        <b style="color: black; font-size: 15px;">56</b>
        
                                                    
                                                    </div>
                                                </div>
                                            </a>  
                                        </div>
                                    <br>
                                <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/41.jpg" width="30" alt="user-1">
                                    <b style="margin:15px;">Mark Jone</b>
                                        <br>
                                            <small style="position: relative; left: 48px;">IOS Developer</small>
                                            <br>
                                        <br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                                    <br>
                                        <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                                            <b style="margin:15px;">Location</b>
                                            <br>
                                                <small style="position: relative; left: 48px;">Lagos Nigeria</small>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="custom-container">
                                                    <img src="assets/portofolio/travel.jpg" class="img-fluid">                                   
                                                        <a href="assets/description.php">
        
                                                            <div class="overlay">
                                                                <div class="text">
                                                                <!-- Dont forget to replace the img icons with material google icons -->
                                                                    <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                                                    <b style="color: black; font-size: 15px;">131</b>
                                                                    <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                                                    <b style="color: black; font-size: 15px;">11</b>
                
                                                                
                                                                </div>
                                                            </div>
                                                        </a>  
                                                    </div>
                                                <br>
                                            <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/43.jpg" width="30" alt="user-1">
                                                <b style="margin:15px;">Cloudy Olowusa</b>
                                                    <br>
                                                    <small style="position: relative; left: 48px;">UIX Designer</small>
                                                    <br>
                                                <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                                                <br>
                                                <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                                                    <b style="margin:15px;">Location</b>
                                                        <br>
                                                            <small style="position: relative; left: 48px;">Edo Nigeria</small>
                                                            </div>
                    <div class="col-sm-3">
                        <div class="custom-container">
                        <img src="assets/portofolio/fullmountain.jpg" class="img-fluid">                                   
                            <a href="assets/description.php">

                                <div class="overlay">
                                    <div class="text">
                                    <!-- Dont forget to replace the img icons with material google icons -->
                                        <img src="img/icons/heart.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">231</b>
                                        <img src="img/icons/chat-2.png" width="20" alt="using material icons oo no forget guy">
                                        <b style="color: black; font-size: 15px;">31</b>

                                    
                                    </div>
                                </div>
                            </a>  
                        </div>
                    <br>
                <img style="border-radius: 50px; position: relative; top: 5px;" src="img/avatars/58.jpg" width="30" alt="user-1">
                    <b style="margin:15px;">Jane Freeman</b>
                        <br>
                        <small style="position: relative; left: 48px;">Graphic Designer</small>
                        <br>
                    <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                    <br>
                    <img src="img/icons/placeholder.png" alt="locator"width="30"/>
                        <b style="margin:15px;">Location</b>
                            <br>
                                <small style="position: relative; left: 48px;">Abuja Nigeria</small>
                            </div>
                            </div>
                        </div>
                        <br>
                        <br>
                    <br> 
                        <div class="container">
                            <div class="row">
                            <div class="col-sm-12 text-center">
                                <a href="assets/sign-in.php" class="btn btn-primary btn-lg" style="padding:13px; width:auto; background-color: #ff014d; border: none;">Oops Tour is over sign in to continue</a>

                            </div>
                            </div>
                        </div> 
<?php
    $devs = $des = $cli = "";
    //Get number of developers
    $query = "SELECT * FROM users WHERE user_type = 'developer'";
    $result = mysqli_query($connection,$query);
    $devs = mysqli_num_rows($result);

    //Get number of designers
    $query = "SELECT * FROM users WHERE user_type = 'designer'";
    $result = mysqli_query($connection,$query);
    $des = mysqli_num_rows($result);

    //Get number of clients
    $query = "SELECT * FROM clients ";
    $result = mysqli_query($connection,$query);
    $cli = mysqli_num_rows($result);
?>
<br><br><br><br><br><br><br>
        <div style="background-color:black; margin-bottom: 0; border-radius: 0px;" class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <b style="color:white; font-weight: lighter;">Devdirectory.oi</b>
                        <br><br>
                        <p style="color: white;"> Lorem ipsum dolor sit amet shan, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                        <br><br>
                        <b style="color:white; font-weight: lighter;">Copyrights Reserved <b id="date-time"></b></b>
                    </div>
                    <div class="col-sm-4 text-center">
                        <b style="color:white; font-weight: lighter;">Follow Us</b>
                        <br><br>
                        <i class="fab fa-facebook" style="color: blue; padding: 5px; width:30;"></i>
                        <i class="fab fa-twitter" style="color: blue; padding: 5px; width:30;"></i>
                        <i class="fab fa-instagram" style="color: blue; padding: 5px; width:30;"></i>
                    </div>
                    <div class="col-sm-4 text-center">
                        <b style="color:white; font-weight: lighter;">Clients</b>
                        <p style="color: white; font-size: 25pt;"><?php echo $cli;?></p>
                        <b style="color:white; font-weight: lighter;">Developers</b>
                        <p style="color: white; font-size: 25pt;"><?php echo $devs;?></p>
                        <b style="color:white; font-weight: lighter;">Designers</b>
                        <p style="color: white; font-size: 25pt;"><?php echo $des?></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/datetime.js"></script>
    </body>
</html>



