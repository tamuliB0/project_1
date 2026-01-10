<?php
$page_title = "Quiz app";
include 'header.php';
require 'questions.php';

if(!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = 1;
}
$current = $_SESSION['current_question'] ?? 1;

if(!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    if(isset($_POST['answer'])) {
        $_SESSION['answers'][$current] = $_POST['answer'];
    }

    if($_POST['action'] == 'previous') {
        if ($current > 1) {
        $_SESSION['current_question']--;
        }
    } elseif ($_POST['action'] == 'next') {
        if($current<$total_question) {
            $_SESSION['current_question']++;
        }
    }
}

$current = $_SESSION['current_question'];

?>

<p> Question <?php echo $current; ?> of <?php echo $total_question;?>
<h3> <?php echo $questions[$current]; ?></h3>

<form method="POST">
    <?php foreach($options[$current]["choices"] as $choice):?>
    <label>
        <input type="radio" name="answer" value="<?php echo $choice; ?>" required>
        <?php echo $choice; ?>
    </label>
    <?php endforeach;?><br>
    <?php if ($current > 1): ?>
        <button type="submit" name="action" value="previous" formnovalidate>Previous Question</button>
    <?php endif; ?>
    <button type="submit" name="action" value="next"><?php echo ($current == $total_question)? "Finish Quiz":"Next Question";?></button>

<?php include 'footer.php'; ?>
