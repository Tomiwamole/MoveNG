<?php 

session_start();
$_SESSION['user_logged'] = "";
header("Location: ../login.php");

?>