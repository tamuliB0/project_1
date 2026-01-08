<?php
session_start();
$page_title = "Page";
include 'header.php';
if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
$username = $_SESSION['username'];
?>

    <h2>Logged in successfully!</h2>
    <p>Welcome back,<?php echo $username; ?></p>
    <button><a href="login.php">Go back</button>

<?php include 'footer.php'; ?>