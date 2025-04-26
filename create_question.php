<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "INSERT INTO questions (quiz_id, question_text, correct_answer) VALUES ($quiz_id, '$question_text', '$correct_answer')";

}
?>