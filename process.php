<?php
require 'config.php';
$error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if(empty($username) || empty($password)) {
    $error = "Please fill all fields";
}

if ($username && $password) {
    $stmt = $pdo->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
    $stmt->execute([$username, $password]);

    echo "User registered succesfully";
    header('Location: register.php');
} else {
    echo "Please fill all fields!";
}