<?php

require_once('db_config.php');
require_once('Sanitize.php');

// Get user input
$username = sanitizeInput($_POST['username']);
$email = sanitizeInput($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert user data into the database
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if ($mysqli->query($query) === TRUE) {
    echo "User registered successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();

?>
