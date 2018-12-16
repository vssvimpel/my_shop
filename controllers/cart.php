<?php
session_start();
require_once '../models/Product.php';


// $product_options = $_SESSION['cart'];
$products = [];
$data_product = [
    'product' => $_REQUEST['product_id'],
    'size' => $_REQUEST['size_id'],
    'count' => 1,
];
foreach ($_SESSION['cart'] as $product_option) {
    $products[] = new Product($product_option[$data_product]);
}



var_dump($product_option);
// переход на вьюшку корзины??

require_once '../views/cart.php';

