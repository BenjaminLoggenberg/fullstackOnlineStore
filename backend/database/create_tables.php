<?php

require_once('db_config.php');

// Create tables for users and shop products
$sql = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS shop_products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);
";

if ($mysqli->multi_query($sql)) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $mysqli->error;
}

$mysqli->close();

?>
