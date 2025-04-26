<?php

include 'connect.php';

if (isset($_GET['quiz_id'])) {

    $sql = "SELECT * FROM questions WHERE quiz_id = $quiz_id";
    $result = mysqli_query($conn, $sql);


}

?>