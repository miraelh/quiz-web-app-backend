<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $quiz_id = intval($_POST['id']);
    $sql = "DELETE FROM quizzes WHERE id = $quiz_id";

    mysqli_close($conn);
}



?>