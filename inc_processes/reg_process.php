<?php require_once("connection.php"); ?>

<?php
    // define variables and set to empty values for client registeration
    $cli_fname = $cli_email = $cli_password = $cli_password2 = "";

    // define variables and set to empty values for developer & designer registeration
    $user_fname = $user_lname = $user_email = $user_password = $user_password2 = "";

    if (isset($_POST["client"])) {
        $cli_fname = test_input($_POST["fname"]);
        $cli_email = test_input($_POST["email"]);
        $cli_password = test_input($_POST["password"]);
        $cli_password2 = test_input($_POST["cpassword"]);

    }elseif(isset($_POST["developer"])) {
        $user_fname = test_input($_POST["fname"]);
        $user_lname = test_input($_POST["lname"]);
        $user_email = test_input($_POST["email"]);
        $user_password = test_input($_POST["password"]);
        $user_password2 = test_input($_POST["cpassword"]);
        $user_type = "developer";

    }elseif(isset($_POST["designer"])) {
        $user_fname = test_input($_POST["fname"]);
        $user_lname = test_input($_POST["lname"]);
        $user_email = test_input($_POST["email"]);
        $user_password = test_input($_POST["password"]);
        $user_password2 = test_input($_POST["cpassword"]);
        $user_type = "designer";
    }

    //function for security check againts injections
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Avoids duplicate email in the DB
    if(isset($_POST["client"])) {
        $result= mysqli_query($connection,"SELECT * FROM clients");
        while ($db=mysqli_fetch_row($result)){
            if ($cli_email == $db[2]){
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
                                    <h1 style="font-size: 50px; color:#ff0f57;">Something went wrong: Registration Failed</h1>
                                    <h3 style="color: #ff0f57;">Reason: Email Already Exists </h3>
                                    <br>
                                    <a href="../assets/setup-account.php" class="btn btn-default" style="background-color:#ff014d; color: white; text-decoration: none; padding: 15px;">back</a>
                                </div>
                            </div>
                        </div>    
                        <script src="../js/datetime.js"></script>
                        </body>
                    </html>
                ';
                return;
            }
        }
    }elseif(isset($_POST["designer"]) || isset($_POST["developer"])) {
        $result= mysqli_query($connection,"SELECT * FROM users");
        while ($db=mysqli_fetch_row($result)){
            if ($user_email == $db[4]){
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
                                <h1 style="font-size: 50px; color:#ff0f57;">Something went wrong: Registration Failed</h1>
                                <h3 style="color: #ff0f57;">Reason: Email Already Exists </h3>
                                    <br>
                                    <a href="../assets/setup-account.php" class="btn btn-default" style="background-color:#ff014d; color: white; text-decoration: none; padding: 15px;">back</a>
                                </div>
                            </div>
                        </div>    
                        <script src="../js/datetime.js"></script>
                        </body>
                    </html>
                ';
                return;
            }
        }
    }else{
        die("Database connection failed: ".mysqli_error_list());
    }

    // Makes sure the password fields are equal
    if (isset($_POST["client"])) {
        if ($cli_password == $cli_password2){
            //Success
            $h_cp = md5($cli_password); // MD5 Hashing technique
            $n = "nil";
            $query = "INSERT INTO clients
            (client_id, fullname, email, password) 
            VALUES ('','{$cli_fname}','{$cli_email}','{$h_cp}')";
            
            $result= mysqli_query($connection,$query);
            if (!$result){
                die("Database connection failed: ");
            }else{
                //More Success
                header("Location: ../assets/sign-in.php?success=1");
                exit;
            }
        } else{
            //Failed
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
                        <h1 style="font-size: 50px; color:#ff0f57;">Something went wrong: Registration Failed</h1>
                        <h3 style="color: #ff0f57;">Reason: Password Mismatch </h3>
                            <br>
                            <a href="../assets/setup-account.php" class="btn btn-default" style="background-color:#ff014d; color: white; text-decoration: none; padding: 15px;">back</a>
                        </div>
                    </div>
                </div>    
                <script src="../js/datetime.js"></script>
                </body>
            </html>
            ';
            
        }
    }elseif(isset($_POST["designer"]) || isset($_POST["developer"])) {
        if ($user_password == $user_password2){
            //Success
            $h_up = md5($user_password); // MD5 Hashing technique
            $n = "nil";
            $query = "INSERT INTO users
            (user_id, user_type, firstname, lastname, email, password) 
            VALUES ('','{$user_type}','{$user_fname}','{$user_lname}','{$user_email}','{$h_up}')";
            
            $result= mysqli_query($connection,$query);
            if (!$result){
                die("Database connection failed: ");
            }else{
                //More Success
                header("Location: ../assets/sign-in.php?success=1");
                exit;
            }
        } else{
            //Failed
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
                        <h1 style="font-size: 50px; color:#ff0f57;">Something went wrong: Registration Failed</h1>
                        <h3 style="color: #ff0f57;">Reason: Password Mismatch </h3>
                            <br>
                            <a href="../assets/setup-account.php" class="btn btn-default" style="background-color:#ff014d; color: white; text-decoration: none; padding: 15px;">back</a>
                        </div>
                    </div>
                </div>    
                <script src="../js/datetime.js"></script>
                </body>
            </html>
            ';
            
        }
    }
?>
<?php require_once("close_connection.php");?>
