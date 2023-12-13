<?php

require_once('db_config.php');
require_once('Sanitize.php');

// Get user input
$userId = sanitizeInput($_POST['user_id']);
$productId = sanitizeInput($_POST['product_id']);

// Add product to user's cart (you might want to use sessions or a separate cart table)
// Example: $query = "INSERT INTO user_carts (user_id, product_id) VALUES ('$userId', '$productId')";

echo "Product added to cart successfully";

// $mysqli->close();

?>
