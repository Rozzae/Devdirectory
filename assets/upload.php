<?php require_once("../inc_processes/connection.php"); ?>
<?php require_once("../inc_processes/session.php"); ?>
<?php
    $type = $userid = $userpics = "";
    $type = $_SESSION['type'];
    $userid = $_SESSION['id'];

    $target_dir = "profilepics/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            if ($type == "user"){
                header('location: userprofile.php?uploadsuccess=1');
            }elseif($type == "client"){
                header('location: clientprofile.php?uploadsuccess=1');
            }else{
                header('location: 500.php');
            }
            $uploadOk = 1;
        } else {
            if ($type == "user"){
                header('location: userprofile.php?filenotimage=1');
            }elseif($type == "client"){
                header('location: clientprofile.php?filenotimage=1');
            }else{
                header('location: 500.php');
            }
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        if ($type == "user"){
            header('location: userprofile.php?fileexits=1');
        }elseif($type == "client"){
            header('location: clientprofile.php?fileexits=1');
        }else{
            header('location: 500.php');
        }
        $uploadOk = 1;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 1000000) {
        if ($type == "user"){
            header('location: userprofile.php?filetoolarge=1');
        }elseif($type == "client"){
            header('location: clientprofile.php?filetoolarge=1');
        }else{
            header('location: 500.php');
        }
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        if ($type == "user"){
            header('location: userprofile.php?invalidfiletype=1');
        }elseif($type == "client"){
            header('location: clientprofile.php?invalidfiletype=1');
        }else{
            header('location: 500.php');
        }
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to  0 by an error
    if ($uploadOk == 0) {
        if ($type == "user"){
            header('location: userprofile.php?errornotuploaded=1');
        }elseif($type == "client"){
            header('location: clientprofile.php?errornotuploaded=1');
        }else{
            header('location: 500.php');
        }
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            if ($type == "user"){
                $query= "UPDATE users SET profile_pics='{$target_file}' WHERE user_id='{$userid}'";
                $result= mysqli_query($connection,$query);
                header('location: userprofile.php?uploadsuccess=1');
            }elseif($type == "client"){
                $query= "UPDATE clients SET profile_pics='{$target_file}' WHERE client_id='{$userid}'";
                $result= mysqli_query($connection,$query);
                header('location: clientprofile.php?uploadsuccess=1');
            }else{
                header('location: 500.php');
            }
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            if ($type == "user"){
                header('location: userprofile.php?erroruploadingfile=1');
            }elseif($type == "client"){
                header('location: clientprofile.php?erroruploadingfile=1');
            }else{
                header('location: 500.php');
            }
        }
    }
?>