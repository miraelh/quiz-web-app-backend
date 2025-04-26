<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $quiz_id = intval($_POST['id']);
    $new_title = mysqli_real_escape_string($conn, $_POST['title']);

    $sql = "UPDATE quizzes SET title = '$new_title' WHERE id = $quiz_id";


}

?>