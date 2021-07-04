<?php
include __DIR__ . "/database/db.php";
include "CProducts.php";
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$products = new CProducts();
$products->quantity($quantity,$name,$mysqli);
?>