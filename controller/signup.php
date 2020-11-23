<?php 

include '../includes/connect.php';
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$tel = $_POST['tel'];
$state = $_POST['state'];

$query = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($connect, $query);
$rows = mysqli_num_rows($result);

if($rows >= 1){
    echo "emailError";
}else{
    $query = "INSERT INTO user(name, email, password, phone, state, theme) VALUES('$name', '$email', '$password', '$tel', '$state', 1)";
    $result = mysqli_query($connect, $query);
    $id = mysqli_insert_id($connect);
    
    $message = "Hello and Welcome {name}, My name is Aria and I\'m going to be your personal assistant";
    
    $time = time();
    
    $query = "INSERT INTO chat(owner, messager, message, time) VALUES(0, $id, '$message', $time)";
    $result = mysqli_query($connect, $query);
    
    echo "success";
    $_SESSION['user_logged'] = $id;
}

?>