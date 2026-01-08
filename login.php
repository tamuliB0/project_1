<?php
session_start();
$page_title = "Login page";
include 'header.php';
    if(isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
        }
?>
<h2>Login</h2>
<form method="POST" action="auth.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required>

    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>   
<?php include 'footer.php'?>