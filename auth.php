<?php
session_start();
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $pdo->prepare($query);
$stmt->execute([
    'username' => $username,
    'password' => $password
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user) {
    $_SESSION['username'] = $user['username'];
    header('Location: success.php');
    exit;
} else {
    $_SESSION['error'] = "Invalid username or password";
    header('Location: login.php');
    exit;
}

