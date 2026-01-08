<?php
session_start();
require 'config.php';
$error = "";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$_SESSION['username'] = $username;

if(empty($username) || empty($password)) {
    $error = "Please fill all fields";
}

if ($username && $password) {
    $stmt = $pdo->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
    $stmt->execute([$username, $password]);

    echo "Welcome " .$_SESSION['username']. ", Your account is ready";
} else {
    $_SESSION['error'] = "Please fill all fields!";
    header('Location: register.php');
    exit;
}