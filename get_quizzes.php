<?php

include 'connect.php';


$sql = "SELECT * FROM quizzes";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    $quizzes = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $quizzes[] = $row;
    }

    echo json_encode($quizzes);

} else {
    echo json_encode([]);
}


mysqli_close($conn);

?>