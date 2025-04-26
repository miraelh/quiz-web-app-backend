<?php

include 'connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $created_by = intval($_POST['created_by']);


}

?>