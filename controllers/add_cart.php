<?php
session_start();

require_once '../models/Product.php';
 
// Добавление ID товара в корзину
$product_data = [
    'product_id' => $_REQUEST['product_id'],
    'size_id' => $_REQUEST['size_id'],
    'count' => 1,
];
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'][] = $product_data;
    // $_SESSION['cart'] = array();
}
// $_SESSION['cart'][] = $product_data;

// $product_ids = isset($_POST['product_id']) ? $_POST['product_id'] : null;
// if(!empty($product_ids)) {
//     $_SESSION['cart'][] = $product_ids;
// }
// $size = isset($_POST['size_id']);
// if(!empty($size)) {
//     $_SESSION['cart'][] = $size;
// } else {
//     echo false;
// }

// var_dump($_SESSION['cart']);

echo true;