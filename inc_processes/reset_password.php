<?php require_once("connection.php"); ?>
<?php require_once("session.php"); ?>

<?php
    // define variables and set to empty values
    $cstrong = $token = $email = $db = $type = "";

    if(isset($_POST['resetpassword'])){
        $cstrong = TRUE;
        $token = bin2hex(openssl_random_pseudo_bytes(64,$cstrong));

        //function for security check againts injections
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //collect filtered data
        if (isset($_POST["resetpassword"])) {
            $email = test_input($_POST["email"]);
        }

        $query = "SELECT * FROM users WHERE email = '{$email}' LIMIT 1";
        $result= mysqli_query($connection,$query);
        if (mysqli_num_rows($result) == 0){
            $query = "SELECT * FROM clients WHERE email = '{$email}' LIMIT 1";
            $result= mysqli_query($connection,$query);
            $db=mysqli_fetch_row($result);
            $user_id = $db[0];
            $type = "client";
        }elseif(mysqli_num_rows($result) == 1){
            $db=mysqli_fetch_row($result);
            $user_id = $db[0];
            $type = "user";
        }else{
            die("Database connection failed ");
        }

        $token2 = md5($token);
        $query = "INSERT INTO password_tokens
        (id, token, user_id, user_type) 
        VALUES ('','{$token2}','{$user_id}','{$type}')";

        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed: ");
        }else{
            //More Success
            echo "Email Sent";
            echo "<br><br><a href='http://localhost/Devdirectory/assets/changepassword.php?token=$token'>Reset link</a>";
            //echo $token;
        }
    }

    if(isset($_POST['newreset'])){
        $pword = $pword2 = $user_id = "";
        if(!($_POST['token'])){
            die('token not retrived');
        }else{
            $token = $_POST['token'];
            $token2 = md5($token);
        }

        //function for security check againts injections
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //collect filtered data
        $pword = test_input($_POST["new_pword"]);
        $pword2 = test_input($_POST["new_pword2"]);

        if ($pword == $pword2){
            //Success
            $h_pword = md5($pword); // MD5 Hashing technique
            $query= "SELECT * FROM password_tokens WHERE token = '{$token2}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            while ($db=mysqli_fetch_row($result)){
                $type = $db[3];
                $user_id = $db[2];
            }

            if ($type == "client"){
                $query= "UPDATE clients SET password='{$h_pword}' WHERE client_id='{$user_id}'";
                $result= mysqli_query($connection,$query);
                if (!$result){
                    die("Database connection failed: ");
                }else{
                    //More Success
                    $query= "DELETE FROM password_tokens WHERE id>0";
                    $result= mysqli_query($connection,$query);
                    header('location: ../assets/sign-in.php?passreset=1');
                }
            }elseif($type == "user"){
                $query= "UPDATE users SET password='{$h_pword}' WHERE user_id='{$user_id}'";
                $result= mysqli_query($connection,$query);
                if (!$result){
                    die("Database connection failed: ");
                }else{
                    //More Success
                    $query= "DELETE FROM password_tokens WHERE user_id='{$user_id}'";
                    $result= mysqli_query($connection,$query);
                    header('location: ../assets/sign-in.php?passreset=1');
                }
            }else{
                die('Not Successfull');
            }
        }else{
            //Failed
            header('location: ../assets/changepassword.php?passmismatch=1');
            
        }
    }

    if (isset($_POST['newchange'])){
        $pword = $pword2 = $user_id = $current_pword = $type = "";

        //function for security check againts injections
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //collect filtered data
        $pword = test_input($_POST["new_pword"]);
        $pword2 = test_input($_POST["new_pword2"]);
        $current_pword = test_input($_POST["current_pword"]);

        $user_id = $_SESSION['id'];
        $type = $_SESSION['type'];
        if ($type == "user"){
            $h_cpword = md5($current_pword);
            $query = "SELECT * FROM users WHERE user_id = '{$user_id}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            while ($db=mysqli_fetch_row($result)){
                $dbpass = $db[5];
            }

            if ($dbpass == $h_cpword){
                $h_pword = md5($pword); // MD5 Hashing technique
                $query= "UPDATE users SET password='{$h_pword}' WHERE user_id='{$user_id}'";
                $result= mysqli_query($connection,$query);
                if (!$result){
                    die("Database connection failed: ");
                }else{
                    //More Success
                    header('location: ../assets/userprofile.php?passchange=1');
                }
            }else{
                header('location: ../assets/changepassword.php?alert=1');   
            }
        }elseif($type == "client"){
            $h_cpword = md5($current_pword);
            $query = "SELECT * FROM clients WHERE client_id = '{$user_id}' LIMIT 1";
            $result = mysqli_query($connection,$query);
            while ($db=mysqli_fetch_row($result)){
                $dbpass = $db[3];
            }

            if ($dbpass == $h_cpword){
                $h_pword = md5($pword); // MD5 Hashing technique
                $query= "UPDATE clients SET password='{$h_pword}' WHERE client_id='{$user_id}'";
                $result= mysqli_query($connection,$query);
                if (!$result){
                    die("Database connection failed: ");
                }else{
                    //More Success
                    header('location: ../assets/clientprofile.php?passchange=1');
                }
            }else{
                header('location: ../assets/changepassword.php?alert=1');   
            }
        }
    }
?>