<?php

require_once "./config/db.php";
// require_once "./entity/product.php";

$db = new Database();
$conn = $db->getConnection();
// $product = new Product($conn);

// echo '<pre>';
// print_r($product->read());
// echo '</pre>';

echo '<h1>Hello, I am API!</h1>';