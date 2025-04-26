<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "DELETE FROM quizzes WHERE id = $quiz_id";

    mysqli_close($conn);
}



?>