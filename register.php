<?php 

include 'connect.php';  

$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);


if ($password !== $confirm_password) {
    echo "Passwords do not match!";
    exit;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$check_user_sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
$result = mysqli_query($conn, $check_user_sql);

if (mysqli_num_rows($result) > 0) {
    echo "Username or Email already taken!";
    exit;
}

?>