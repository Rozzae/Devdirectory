<?php require_once("connection.php"); ?>
<?php require_once("session.php"); ?>

<?php
    $userid = $username = $email = $usertype = $profilepics = $skill = $exp = $location = $role = $bio = "";

    if (isset($_SESSION['id'])){
        $userid = $_SESSION['id'];
        $username = $_SESSION['name'];
        $usertype = $_SESSION['type'];
    }
?>