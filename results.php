<?php
require 'questions.php';
$results = [];
$current = $_SESSION['current_question'];

$counter = 1;

// print_r($_SESSION['answers']);

foreach($options as $value) {
    $answer = $value['answer'];

    if($answer == $_SESSION['answers'][$counter]) {
        echo "Correct answers";
    } else {
        echo "Wrong";
    } 
    $counter++; 
}




































/* Another option
$correct = 0;
foreach($options as $key => $value) {
    if($value['answer'] == $_SESSION['answers'][$key]) {
        $correct++;
    }
}
echo "SCORE: $correct out of $total_question";
*/