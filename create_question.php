<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $quiz_id = intval($_POST['quiz_id']);
    $question_text = mysqli_real_escape_string($conn, $_POST['question_text']);
    $correct_answer = mysqli_real_escape_string($conn, $_POST['correct_answer']);

    $sql = "INSERT INTO questions (quiz_id, question_text, correct_answer) VALUES ($quiz_id, '$question_text', '$correct_answer')";

    mysqli_close($conn);
}
?>