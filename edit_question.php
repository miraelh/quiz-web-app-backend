<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $question_id = intval($_POST['id']);
    $new_question_text = mysqli_real_escape_string($conn, $_POST['question_text']);
    $new_correct_answer = mysqli_real_escape_string($conn, $_POST['correct_answer']);

    $sql = "UPDATE questions SET question_text = '$new_question_text', correct_answer = '$new_correct_answer' WHERE id = $question_id";

    mysqli_close($conn);
}

?>