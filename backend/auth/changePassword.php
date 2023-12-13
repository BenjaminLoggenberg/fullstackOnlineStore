<?php

require_once('db_config.php');
require_once('Sanitize.php');

// Get user input
$email = sanitizeInput($_POST['email']);
$newPassword = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

// Update user password
$query = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";

if ($mysqli->query($query) === TRUE) {
    echo "Password changed successfully";
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();

?>
