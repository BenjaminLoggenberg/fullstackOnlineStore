<?php

require_once('db_config.php');

// Get product ID from request
$productId = $_GET['id'];

// Fetch and return product data
$query = "SELECT id, name, description, price FROM shop_products WHERE id = $productId";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $productData = $result->fetch_assoc();
    echo json_encode($productData);
} else {
    echo "Product not found";
}

$mysqli->close();

?>
