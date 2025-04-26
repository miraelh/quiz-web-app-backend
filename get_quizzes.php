<?php

include 'connect.php';


$sql = "SELECT * FROM quizzes";
$result = mysqli_query($conn, $sql);

?>