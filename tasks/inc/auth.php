<?php
    session_start();
    include('./inc/db.php');
    if(!isset($_SESSION['user_name'])){
        header("location:./sign_in.php");
    }
?>