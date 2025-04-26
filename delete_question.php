<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $question_id = intval($_POST['id']);

    $sql = "DELETE FROM questions WHERE id = $question_id";

}

?>