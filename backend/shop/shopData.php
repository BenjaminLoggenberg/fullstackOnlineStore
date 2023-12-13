<?php

require_once('db_config.php');

// Fetch and return shop product data
$query = "SELECT id, name, description, price FROM shop_products";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $shopData = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($shopData);
} else {
    echo "No products found";
}

$mysqli->close();

?>
