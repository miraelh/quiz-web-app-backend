<?php

include 'connect.php';

if (isset($_GET['quiz_id'])) {

    $sql = "SELECT * FROM questions WHERE quiz_id = $quiz_id";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        $questions = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $questions[] = $row;
        }
        echo json_encode($questions);

    } else {
        echo json_encode([]);
    }
}

?>