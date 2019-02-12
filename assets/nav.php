<?php
    if (isset($_SESSION['id'])){
        $type = $_SESSION['type'];
        if ($type == 'user'){
            $query = "SELECT * FROM users WHERE user_id = '{$userid}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            while ($db=mysqli_fetch_row($result)){
                $pics = $db[6];
            }
        }elseif($type == 'client'){
            $query = "SELECT * FROM clients WHERE client_id = '{$userid}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            while ($db=mysqli_fetch_row($result)){
                $pics = $db[4];
            }
        }
        if (empty($pics)){$pics = '../img/avatars/user.png'; }
        echo '
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
                    <a style="margin-right: 15px; color: white;" class="nav-link" href="'.$type.'profile.php"><img src="'.$pics.'" class="mr-3 mt-0 rounded-circle" width="30" height="30" alt="user"/>Hi, '.$username.'</a>
                    </li>            
                    <li class="nav-item">
                        <a id="btn-create-account" class="nav-link btn-primary btn-md" href="gopro.php">Go Premuim</a>
                    </li>
                    </ul>
                </div>  
            </nav>
        ';
    }else{
    echo '
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
                <a id="btn-create-account" class="nav-link btn-primary btn-md" href="setup-account.php">Create Account</a>
                </li>
            </ul>
        </div>  
    </nav>
    ';
    }
    ?>