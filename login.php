<?php

include 'connect.php';

session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            if ($_SESSION['role'] === 'admin') {
                header("Location: dashboard.php");
                exit;
            } else {
                echo "You are not an admin!";
            }
        } else {
            echo "Invalid password!";
        }
        
        } else {
            echo "No user found with that username. Please Register";
        }

}


?>