<?php

require_once('db_config.php');
require_once('Sanitize.php');

// Get user input
$email = sanitizeInput($_POST['email']);
$password = $_POST['password'];

// Check if user exists and verify password
$query = "SELECT * FROM users WHERE email = '$email'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        echo "Login successful";
    } else {
        echo "Invalid password";
    }
} else {
    echo "User not found";
}

$mysqli->close();

?>
