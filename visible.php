<?php
include __DIR__ . "/database/db.php";
include "CProducts.php";
$article = $_POST['article'];
$products = new CProducts();
$products->visible($article,$mysqli);
?>