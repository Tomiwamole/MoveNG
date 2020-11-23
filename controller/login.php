<?php 

include '../includes/connect.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($connect, $query);
$rows = mysqli_num_rows($result);

if($rows < 1){
    echo "emailError";
}else{
    $ans = mysqli_fetch_assoc($result);
    echo $id = $ans['id'];
    $_SESSION['user_logged'] = $id;
}


?>
