<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>

<?php
    // define variables and set to empty values
    $email = $pword = $type = $user_id = $fullname = "";

    //collect filtered data
    if (isset($_POST["login"])) {
        $email = test_input($_POST["email"]);
        $pword = test_input($_POST["password"]);
        $hpword = md5($pword);
    }

    //function for security check againts injections
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$hpword}' LIMIT 1";
    $result= mysqli_query($connection,$query);
    if (mysqli_num_rows($result) == 0){
        $query = "SELECT * FROM clients WHERE email = '{$email}' AND password = '{$hpword}' LIMIT 1";
        $result= mysqli_query($connection,$query);
        $type = "client";
    }elseif(mysqli_num_rows($result) == 1){
        $type = "user";
    }else{
        die("Database connection failed ");
    }

    //Grabs ID of user to use for session
    if($type == "user"){
        while ($db=mysqli_fetch_row($result)){
            $user_id = $db[0];
            $fullname = $db[2]." ".$db[3];
        }
    }elseif($type == "client"){
        while ($db=mysqli_fetch_row($result)){
            $user_id = $db[0];
            $fullname = $db[1];
        }
    }else{
        die("Database Error! ");
    }

    $_SESSION['id'] = $user_id;
    $_SESSION['name'] = $fullname;
    $_SESSION['type'] = $type;

    // for the login
    if (mysqli_num_rows($result) == 1){
        //success
        if ($type == "user"){
            if (isset($_GET['new'])){
                header("Location: ../assets/userprofile.php?new=1");
                exit;
            }else{
                header("Location: ../assets/userprofile.php");
                exit;
            }
        }elseif($type == "client"){
            if (isset($_GET['new'])){
                header("Location: ../assets/clientprofile.php?new=1");
                exit;
            }else{
                header("Location: ../assets/clientprofile.php");
                exit;
            }
        }else{
            echo '
            <!DOCTYPE html>
            <html lang="en">
                <head>
                <title>500 Internal server error</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="../css/styles.css" rel="stylesheet">
                <link href="../css/learnmore.css" rel="stylesheet">
                
                <link rel="stylesheet" href="../bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <script src="../bs/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="../bs/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
                <script src="../bs/maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
                </head>
            
                <body style="background-image: url("../includes/500.jpg"); background-size: cover;">
                <br>
                <br>                        
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h1 style="font-size: 50px; color:#ff0f57;">Something went wrong: Login Failed</h1>
                            <h3 style="color: #ff0f57;">Reason: Unspecified Type of user </h3>
                            <br>
                            <a href="../assets/sign-in.php" class="btn btn-default" style="background-color:#ff014d; color: white; text-decoration: none; padding: 15px;">back</a>
                        </div>
                    </div>
                </div>    
                <script src="../js/datetime.js"></script>
                </body>
            </html>
        ';    
        }
    }else{
        //Failed
        header("Location: ../assets/sign-in.php?wrongpass=1");
    }
?>