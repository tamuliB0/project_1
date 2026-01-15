<?php
session_start();
require 'header.php';
// require 'questions.php';
require 'config.php';

// $counter = 1;
// print_r($_SESSION['answers']);
// if(!isset($_SESSION['answers']) || empty($_SESSION['answers'])) {
//     header('Location: index.php');
//     exit;
// }

$user_answer = $_SESSION['answers'];
// echo "<pre>";
// print_r($user_answer);
// echo "</pre>";

// $result = 0;
$stmt = $pdo->query('SELECT COUNT(*) FROM  questions');
$total_question = $stmt->fetchColumn();


$stmt = $pdo->query('SELECT id, answer FROM questions');
$questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

$correctAns = array_column($questions, 'answer');
// print_r($correctAns);
$result = array_intersect($user_answer, $correctAns);
// print_r($result);
$score = count($result);


?>

<h2>Quiz Complete!!</h2>
<p><?php echo $score; ?> out of <?php echo $total_question; ?><br>
<a href="index.php">Take the quiz again</a>


<?php include 'footer.php'; ?>


















<!-- 

// foreach($options as $value) {
//     $answer = $value['answer'];

//     if($answer == $_SESSION['answers'][$counter]) {
//         echo "Correct answers";
//     } else {
//         echo "Wrong";
//     } 
//     $counter++; 
// }
// echo "Score:".$counter."out of".$total_question; -->


<!-- 
/* Another option
$correct = 0;
foreach($options as $key => $value) {
    if($value['answer'] == $_SESSION['answers'][$key]) {
        $correct++;
    }
}
echo "SCORE: $correct out of $total_question";
*/ -->