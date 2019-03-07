<?php require_once("connection.php"); ?>
<?php require_once("session.php"); ?>

<?php
    $userid = $username = $email = $usertype = $profilepics = $skill = $exp = $location = $role = $bio = "";

    if (isset($_SESSION['id'])){
        $userid = $_SESSION['id'];
        $username = $_SESSION['name'];
        $usertype = $_SESSION['type'];
    }

    if($type = "user"){
        $query = "SELECT * FROM users WHERE user_id = '{$userid}'";
        $result = mysqli_query($connection,$query);
        while ($db=mysqli_fetch_row($result)){
            $skill = $db[7];
            $exp = $db[8];
            $location = $db[9];
            $role = $db[10];
            $bio = $db[11];
        }

        if (empty($skill) || empty($exp) || empty($location) || empty($role) || empty($bio)){
            $error = 1;
        }
    }

    //if skill is added
    if (isset($_POST['skill_submit'])){
        $skill = $_POST['skills'];

        // check if skill exists already
        $query = "SELECT skill FROM skills WHERE user_id = '{$userid}'";
        $result = mysqli_query($connection,$query);
        while ($db=mysqli_fetch_row($result)){
            if ($db = $skill){
                header('location: ../assets/userprofile.php?skillexists=1');
            }
        }

        //if skill doesnt exits
        $query1 = "INSERT INTO skills
            (id, user_id, skill) 
            VALUES ('','{$userid}','{$skill}')";
        $query2 = "UPDATE users SET skill='1' WHERE user_id='{$userid}'";
        $result2 = mysqli_query($connection,$query2);
        $result1 = mysqli_query($connection,$query1);
        
        if (!$result1 || !$result2){
            die("Database connection failed: ");
        }else{
            //More Success
            header("Location: ../assets/userprofile.php?skilladded=1");
            exit;
        }
    }

    if(!empty($exp)){
        if ($exp == 'beginner'){
            $colorb = 'green';
        }elseif($exp == 'intermidate'){
            $colori = 'green';
        }elseif($exp == 'pro'){
            $colorp = 'green';
        }elseif($exp == 'god'){
            $colorg = 'green';
        }
    }

    //if experience is added
    if (isset($_POST['exp_beginner'])){
        $exp = 'beginner';
        $query = "UPDATE users SET experience='{$exp}' WHERE user_id='{$userid}'";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed: ");
        }else{
            header('location: ../assets/userprofile.php');
        }
    }elseif(isset($_POST['exp_intermidate'])){
        $exp = 'intermidate';
        $query = "UPDATE users SET experience='{$exp}' WHERE user_id='{$userid}'";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed: ");
        }else{
            header('location: ../assets/userprofile.php');
        }
    }elseif(isset($_POST['exp_pro'])){
        $exp = 'pro';
        $query = "UPDATE users SET experience='{$exp}' WHERE user_id='{$userid}'";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed: ");
        }else{
            header('location: ../assets/userprofile.php');
        }
    }elseif(isset($_POST['exp_god'])){
        $exp = 'god';
        $query = "UPDATE users SET experience='{$exp}' WHERE user_id='{$userid}'";
        $result = mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed: ");
        }else{
            header('location: ../assets/userprofile.php?expupdated=1');
        }
    }else{
        if(!empty($exp)){
            if ($exp == 'beginner'){
                $colorb = 'green';
            }elseif($exp == 'intermidate'){
                $colori = 'green';
            }elseif($exp == 'pro'){
                $colorp = 'green';
            }elseif($exp == 'god'){
                $colorg = 'green';
            }
        }
    }

    //To add location
    if (isset($_POST['location_submit'])){
        $location = $_POST['location'];

        //if skill doesnt exits
        $query = "INSERT INTO users
            (id, user_id, skill) 
            VALUES ('','{$userid}','{$skill}')";
        $query = "UPDATE users SET skill='1' WHERE user_id='{$userid}'";
        $result = mysqli_query($connection,$query);
        
        if (!$result1 || !$result2){
            die("Database connection failed: ");
        }else{
            //More Success
            header("Location: ../assets/userprofile.php?skilladded=1");
            exit;
        }
    }
?>