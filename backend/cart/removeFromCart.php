<?php

require_once('db_config.php');
require_once('Sanitize.php');

// Get user input
$userId = sanitizeInput($_POST['user_id']);
$productId = sanitizeInput($_POST['product_id']);

// Remove product from user's cart (you might want to use sessions or a separate cart table)
// Example: $query = "DELETE FROM user_carts WHERE user_id = '$userId' AND product_id = '$productId'";

echo "Product removed from cart successfully";

// $mysqli->close();

?>
