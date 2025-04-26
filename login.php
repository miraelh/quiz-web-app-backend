<?php

include 'connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


}

?>