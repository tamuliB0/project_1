<?php
session_start();
// include 'header.php';
$questions = [
    1 => "What is the largest mammal on earth?",
    2 => "Which country has three capitals?",
    3 => "What is the currency of Russia?",
    4 => "What is the capital of Australia?"
];

$total_question = count($questions);

$options = [
    1 => [
        "choices" => ["Elephant", "Giraffe", "Hippopotamus", "Blue Whale"],
        "answer" => "Blue Whale"
    ], 
    2 => [
        "choices" => ["Netherlands", "South Africa", "India", "Switzerland"], 
        "answer" => "South Africa"
    ],
    3 => [
        "choices" => ["Yen", "Rupee", "Ruble", "Ringgit"], 
        "answer" => "Ruble"
    ],
    4 => [
        "choices" => ["Canberra", "Sydney", "Perth", "Melbourne"], 
        "answer" => "Canberra"
    ],
];


// include 'footer.php';