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
            $query = "SELECT * FROM users WHERE user_id = '{$userid}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            while ($db=mysqli_fetch_row($result)){
                $pics = $db[6];
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
                        <a style="margin-right: 15px; color: white;" class="nav-link" href="userprofile.php"><img src="<?php if (empty($pics)){$pics = '../img/avatars/user.png'; echo $pics; }else{ echo $pics; }?>" class="mr-3 mt-0 rounded-circle" width="30" height="30" alt="user"/> Hi, <?php echo $username;?></a>   
                    </li>               
                    <li class="nav-item">
                    <a id="btn-create-account" class="nav-link btn-primary btn-md" href="gopro.php">Go Premuim</a>
                    </li>
                </ul>
            </div>  
        </nav>

        <div class="container">
            <div class="row">
                <div style="background-color: rgba(195, 195, 195, 0.088); border: 1px solid rgb(172, 172, 172); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); height: 800px;" class="col-sm-4 text-center">
                    <br><br>
                    <img src="<?php 
                                if (empty($pics)){
                                    $pics = '../img/avatars/user.png';
                                    echo $pics; 
                                }else{
                                    echo $pics; 
                                }
                            ?>" class="mr-3 mt-0 rounded-circle" style="width:100px; height:100px;" alt="user-profile-picture"/>
                    <br><br>
                    <h5><?php echo $username;?></h5>
                    <br>
                
                    <!-- The Modal -->
                    <div class="modal fade" id="upload">
                        <div id="clear-chat" class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Upload Photo</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                                        Select image to upload:
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        <hr>
                                        <input type="submit" value="Upload Image" name="submit" class="btn btn-default" style="color:#ff014d; background-color: black; text-decoration: none; width: 150px;">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button type="button" data-toggle="modal" data-target="#upload" class="btn btn-default" style="color:#ff014d; background-color: black; text-decoration: none; width: 150px;">Add Photo</button>
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
                    <?php
                        if (isset($_GET['passchange'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Done</strong> Password Changed Successfully.
                                </div>
                            ';
                        }
                        if (isset($_GET['erroruploadingfile'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Error</strong> There was an error uploading your picture
                                </div>
                            ';
                        }
                        if (isset($_GET['errornotuploaded'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Error</strong> Sorry, your file was not uploaded.
                                </div>
                            ';
                        }
                        if (isset($_GET['invalidfiletype'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Error</strong> Sorry, only JPG, JPEG, PNG & GIF files are allowed.
                                </div>
                            ';
                        }
                        if (isset($_GET['filetoolarge'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Error</strong> Sorry, your file is too large.
                                </div>
                            ';
                        }
                        if (isset($_GET['fileexits'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Error</strong> Sorry, file already uploaded.
                                </div>
                            ';
                        }
                        if (isset($_GET['filenotimage'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Error</strong> Sorry, file is not an image file.
                                </div>
                            ';
                        }
                        if (isset($_GET['uploadsuccess'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Done!</strong> Profile Picture Updated Successfully.
                                </div>
                            ';
                        }
                        if (isset($_GET['new'])){
                            echo '
                                <div class="alert alert-success alert-dismissible" style="padding: 30px; border-radius: 0px; background: linear-gradient(to right, #31f1b4 , #66a00aa8); color: white;">  
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>INFO!</strong> Please Complete Your Information details to enable people find you.
                                </div>
                            ';
                        }
                    ?>
                    <br>
                    <br>
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0); border: 3px solid #f30c32; border-top: none; border-left: none; border-right: none; background: none; border-radius: 0px;" class="nav-link active" data-toggle="pill" href="#home">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0); border: 3px solid #bd0c29; border-top: none; border-left: none; border-right: none; background: none; border-radius: 0px;" class="nav-link" data-toggle="pill" href="#menu1">Experience</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0); border: 3px solid #910b21; border-top: none; border-left: none; border-right: none; background: none; border-radius: 0px;"class="nav-link" data-toggle="pill" href="#menu2">Location</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0); border: 3px solid #4e0411; border-top: none; border-left: none; border-right: none; background: none; border-radius: 0px;" class="nav-link" data-toggle="pill" href="#menu3">Role</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0); border: 3px solid #4e0411; border-top: none; border-left: none; border-right: none; background: none; border-radius: 0px;" class="nav-link" data-toggle="pill" href="#menu5">Edit Bios</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 15px; text-decoration: none; color: rgb(0, 0, 0); border: 3px solid #35030b; border-top: none; border-left: none; border-right: none; background: none; border-radius: 0px;" class="nav-link" data-toggle="pill" href="#menu4">Portfolio</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <h4>What you are great at?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <br>
                            <form class="form-inline" action="">
                                <input style="padding: 25px; border-radius: 0px; border: 2px solid rgba(0, 0, 0, 0.564);" class="form-control col-sm-6" type="text" placeholder="Search">
                                <button style="padding: 14px; border-radius: 0px; background-color:#ff014d; width: 150px;" class="btn btn-success" type="submit">Add</button>
                            </form>
                            <br><br>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">HTML</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">CSS</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">JavaScript</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">PhotoShop</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Graphic Design</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">PHP</span>
                            <br><br>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Python</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Django</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Node.js</span>
                        </div>
                        <div id="menu1" class="container tab-pane fade"><br>
                            <h4>Are you a Pro?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <br>
                            <h4>Select level of experience</h4>
                            <br>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Beginner</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Intermidate</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Pro</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">God</span>
                            <br><br>
                            <h4>Progress Bar</h4>
                            <br>
                            <div class="progress">
                                <div class="progress-bar bg-dark" style="width:30%">Beginner</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="progress-bar bg-dark" style="width:50%">Intermidate</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="progress-bar bg-dark" style="width:90%">God</div>
                            </div>
                            <br>
                            <div class="progress">
                                <div class="progress-bar bg-dark" style="width:70%">Professional</div>
                            </div>
                        </div>
                        <div id="menu2" class="container tab-pane fade"><br>
                            <h4>Current Resdients?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <br>
                            <form class="form-inline" action="/action_page.php">
                                <input style="padding: 25px; border-radius: 0px; border: 2px solid rgba(0, 0, 0, 0.564);" class="form-control col-sm-6" type="text" placeholder="Search">
                                <button style="padding: 14px; border-radius: 0px; background-color:#ff014d; width: 150px;" class="btn btn-success" type="submit">Location</button>
                            </form>
                            <br><br>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Abuja, Nigeria</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Edo state, Nigeria</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Lagos state</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Abuja, Nigeria</span>
                            <br><br>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Edo state, Nigeria</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Lagos state</span>
                        </div>
                        <div id="menu3" class="container tab-pane fade"><br>
                            <h4>What's Your Role ?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <br>
                            <form class="form-inline" action="/action_page.php">
                                <input style="padding: 25px; border-radius: 0px; border: 2px solid rgba(0, 0, 0, 0.564);" class="form-control col-sm-6" type="text" placeholder="Search">
                                <button style="padding: 14px; border-radius: 0px; background-color:#ff014d; width: 150px;" class="btn btn-success" type="submit">Add Profession</button>
                            </form>
                            <br><br>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Graphic Designer</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Full Stack Developer</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Logo Designer</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">IOS Developer</span>
                            <br><br>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">UIX Designer</span>
                            <span style="padding: 20px; background-color:#ff014d;" class="badge badge-pill badge-danger">Software Developer</span>
                        </div>
                        <div id="menu5" class="container tab-pane fade"><br>
                            <h4>Tell us about you?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <br>
                            <form class="form-inline" action="/action_page.php">
                                <textarea style="border: 2px solid black; padding: 20px;" rows="10" cols="80"></textarea>
                            </form>
                            <br><br><br>
                        </div>
                        <div id="menu4" class="container tab-pane fade"><br>
                            <h3>Showcase your works</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            <button type="">Add Portfolio</button>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="custom-container">
                                        <img src="../assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                                        <a href="description.php">
                                            <div class="overlay">
                                                <div class="text">
                                                    <!-- Dont forget to replace the img icons with material google icons -->
                                                    <img src="../img/icons/garbage.png" width="20" alt="using material icons oo no forget guy">
                                                    <b style="color: black; font-size: 15px;">Delete</b>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-container">
                                        <img src="../assets/portofolio/fashion.jpg" class="img-fluid">                                   
                                        <a href="description.php">
                                            <div class="overlay">
                                                <div class="text">
                                                    <!-- Dont forget to replace the img icons with material google icons -->
                                                    <img src="../img/icons/garbage.png" width="20" alt="using material icons oo no forget guy">
                                                    <b style="color: black; font-size: 15px;">Delete</b>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-container">
                                        <img src="../assets/portofolio/fullkit.jpg" class="img-fluid">                                   
                                        <a href="description.php">
                                            <div class="overlay">
                                                <div class="text">
                                                    <!-- Dont forget to replace the img icons with material google icons -->
                                                    <img src="../img/icons/garbage.png" width="20" alt="using material icons oo no forget guy">
                                                    <b style="color: black; font-size: 15px;">Delete</b>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="custom-container">
                                        <img src="../assets/portofolio/cutekid.jpg" class="img-fluid">                                   
                                        <a href="description.php">
                                            <div class="overlay">
                                                <div class="text">
                                                    <!-- Dont forget to replace the img icons with material google icons -->
                                                    <img src="../img/icons/garbage.png" width="20" alt="using material icons oo no forget guy">
                                                    <b style="color: black; font-size: 15px;">Delete</b>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-container">
                                        <img src="../assets/portofolio/fashion.jpg" class="img-fluid">                                   
                                        <a href="description.php">
                                            <div class="overlay">
                                                <div class="text">
                                                    <!-- Dont forget to replace the img icons with material google icons -->
                                                    <img src="../img/icons/garbage.png" width="20" alt="using material icons oo no forget guy">
                                                    <b style="color: black; font-size: 15px;">Delete</b>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="custom-container">
                                        <img src="../assets/portofolio/fullkit.jpg" class="img-fluid">                                   
                                        <a href="description.php">
                                            <div class="overlay">
                                                <div class="text">
                                                    <!-- Dont forget to replace the img icons with material google icons -->
                                                    <img src="../img/icons/garbage.png" width="20" alt="using material icons oo no forget guy">
                                                    <b style="color: black; font-size: 15px;">Delete</b>
                                                </div>
                                            </div>
                                        </a>  
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="" class="btn btn-default" style="color:#ff014d; background-color: black; text-decoration: none; width: 200px;">Save Changes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--Footer included as external file-->
<?php include("footer.php"); ?>