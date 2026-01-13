<?php
$page_title = "Quiz app";
include 'header.php';
require 'config.php';

if(!isset($_SESSION['current_question'])) {
    $_SESSION['current_question'] = 1;
}
$current = $_SESSION['current_question'] ?? 1;

// print_r($current);

$stmt = $pdo->query('SELECT COUNT(*) FROM questions');
$total_question = $stmt->fetchColumn();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['answer'])) {
        $_SESSION['answers'][$current] = $_POST['answer'];
    }

    if(isset($_POST['action'])) {
    if($_POST['action'] == 'previous') {
        if ($current > 1) {
            $_SESSION['current_question']--;
            }
    } elseif ($_POST['action'] == 'next') {
        echo "entered next condition<br>";
        echo $_SESSION['current_question']."<br>";
        if ($current < $total_question)
        $_SESSION['current_question']++;
        echo $_SESSION['current_question'];
    }
    }
    // header('Location: display-logic.php');
    // exit;
}

$current = $_SESSION['current_question'];

// print_r($current);

$stmt = $pdo->prepare('SELECT * FROM questions WHERE id = ?');
$stmt->execute([$current]);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($data);

// $stmt = $pdo->prepare('SELECT option1, option2, option3, option4 FROM questions WHERE id = ?');
// $stmt->execute([$current]);
// $options = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<p> Question <?php echo $current; ?> of <?php echo $total_question;?>
<h3> <?php echo $data['question']; ?></h3>

<form method="POST">
    <?php //foreach($data as $data):?>
    <label>
        <input type="radio" name="answer" value="<?php echo $data['option1']; ?>" required>
        <?php echo $data['option1']; ?>
    </label>
    <label>
        <input type="radio" name="answer" value="<?php echo $data['option2']; ?>" required>
        <?php echo $data['option2']; ?>
    </label>
    <label>
        <input type="radio" name="answer" value="<?php echo $data['option3']; ?>" required>
        <?php echo $data['option3']; ?>
    </label>
    <label>
        <input type="radio" name="answer" value="<?php echo $data['option4']; ?>" required>
        <?php echo $data['option4']; ?>
    </label>
    <?php //endforeach;?><br>
    <?php if ($current > 1): ?>
        <button type="submit" name="action" value="previous" formnovalidate>Previous Question</button>
    <?php endif; ?>
    <button type="submit" name="action" value="next"><?php echo ($current == $total_question)? "Finish Quiz":"Next Question";?></button>
</form>
<?php include 'footer.php'; ?>

<!-- // count = 1;
// for loop {
// $op = "option" . count;
// echo $data[$op]
// count++;
// } -->