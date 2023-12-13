<?php

require_once('db_config.php');

// Get user input
$email = $_GET['email'];

// Fetch and return user profile data
$query = "SELECT id, username, email FROM users WHERE email = '$email'";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $userProfile = $result->fetch_assoc();
    echo json_encode($userProfile);
} else {
    echo "User not found";
}

$mysqli->close();

?>
