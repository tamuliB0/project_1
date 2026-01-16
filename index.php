<?php
session_start();
$page_title = "Quiz app";
include 'header.php';
// require 'questions.php';
require 'config.php';

// unset($_SESSION['current_question']);
// unset($_SESSION['answers']);

$stmt = $pdo->query('SELECT COUNT(*) FROM questions');
$total_question = $stmt->fetchColumn();

?>

<h1>General Knowledge Quiz</h1>
<p>Test your knowledge with <?php echo $total_question?> questions!</p><br>
<a href="display-logic.php">Start Quiz</a>

<?php include 'footer.php'; ?>