<?php
    session_start();

    if(!isset($_SESSION['manajer'])) {
        header("Location: login-page.php");
        exit();
    }
?>