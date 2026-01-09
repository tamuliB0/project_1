<?php
session_start();
$page_title = "Quiz app";
// $page_header = "General Knowledge Quiz";
include 'header.php';
require 'questions.php';
?>

<h1>General Knowledge Quiz</h1>
<p>Test your knowledge with <?php echo $total_question?> questions!</p><br>
<a href="questions.php">Start Quiz</a>

<?php include 'footer.php'; ?>