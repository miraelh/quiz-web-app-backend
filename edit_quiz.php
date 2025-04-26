<?php

include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $quiz_id = intval($_POST['id']);
    $new_title = mysqli_real_escape_string($conn, $_POST['title']);


}

?>