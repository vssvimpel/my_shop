<?php
session_start();
require_once '../models/Product.php';
require_once '../models/Size.php';

//  $product_id = $_GET['id'];
if (isset($_GET['id'])){
    $product_id = $_GET['id']; 
} else {
    header ('Location:http://localhost/project0408/controllers/catalog.php');
    exit;
}

$product = new Product($product_id);

$sizes = Size::getAllbyProduct($product_id);

require_once '../views/product.php';
