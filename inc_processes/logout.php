<?php
    session_start();
    session_destroy();

    header('location: ../assets/sign-in.php?logout=1');
?>