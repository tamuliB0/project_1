<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <h2>Logged in successfully!</h2>
    <p>Welcome back,<?php echo $username; ?></p>
    <button><a href="login.php">Go back</button>
</body>
</html>