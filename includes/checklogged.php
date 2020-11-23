<?php 

session_start();

if(!isset($_SESSION['user_logged']) || empty($_SESSION['user_logged'])){
    header("Location: login.php");
}

?>