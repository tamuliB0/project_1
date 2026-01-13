<?php
session_start();
$page_title = "Quiz app";
// $page_header = "General Knowledge Quiz";
include 'header.php';
// require 'questions.php';
require 'config.php';


$stmt = $pdo->query('SELECT COUNT(*) FROM questions');
$total_question = $stmt->fetchColumn();

?>

<h1>General Knowledge Quiz</h1>
<p>Test your knowledge with <?php echo $total_question?> questions!</p><br>
<a href="display-logic.php">Start Quiz</a>

<?php include 'footer.php'; ?>