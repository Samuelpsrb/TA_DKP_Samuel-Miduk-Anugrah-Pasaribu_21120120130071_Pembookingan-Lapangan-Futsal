<?php
    session_start();
    $SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    header("Location: login.php");
?>