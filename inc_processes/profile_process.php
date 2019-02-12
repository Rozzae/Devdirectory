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
?>