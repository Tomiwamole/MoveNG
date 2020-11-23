<?php

include '../includes/connect.php';
session_start();
$id = $_SESSION['user_logged'];

if (isset($_POST['message'])) {
    $message = $_POST['message'];
    sendmessage($message, $id);
} else if (isset($_GET['message'])) {
    $message = $_GET['message'];
    sendmessage($message, $id);
    header("Location: ../index.php");
}

function sendmessage($message, $id) {
    global $connect;
    $message = trim($message);
    $time = time();
    $query = "INSERT INTO chat(owner, messager, message, time) VALUES($id, $id, '$message', $time)";
    $result = mysqli_query($connect, $query);

    $message = strtolower($message);

    echo strpos($message, "hello");

    if (strpos($message, "hello") > 0 || strpos($message, "hello") != "") {
        echo "Hello";
    }

    $find = strpos($message, "to");

    $firstLocation = trim(substr($message, 0, $find));
    $secondLocation = trim(substr($message, $find + 2, strlen($message)));

    $query = "SELECT * FROM location WHERE loc_from LIKE '$firstLocation%' AND loc_to LIKE '$secondLocation%'";
    $result = mysqli_query($connect, $query);
    $rows = mysqli_num_rows($result);

    if ($rows == 0) {
        $sql = "SELECT * FROM location WHERE loc_from LIKE '$secondLocation%' AND loc_to LIKE '$firstLocation%'";
        $res = mysqli_query($connect, $sql);
        $row = mysqli_num_rows($res);
        if ($row == 0) {
            $newMessage = "Could not find Location";
        } else {
            $sol = mysqli_fetch_assoc($res);
            $newMessage = $sol['description1'];
        }
    } else {
        $ans = mysqli_fetch_assoc($result);
        $newMessage = $ans['description'];
    }


    $time = time() + 2;
    $query = "INSERT INTO chat(owner, messager, message, time) VALUES(0, $id, '$newMessage', $time)";
    $result = mysqli_query($connect, $query);
}

?>