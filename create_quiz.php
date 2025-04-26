<?php

include 'connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $created_by = intval($_POST['created_by']);



    $sql = "INSERT INTO quizzes (title, created_by) VALUES ('$title', $created_by)";
    


    if (mysqli_query($conn, $sql)) {
            echo "Quiz created successfully!";
        } else {
           echo "Error creating quiz: " . mysqli_error($conn);
    }

}

?>