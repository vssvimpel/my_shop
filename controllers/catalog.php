<?php
session_start();
require_once '../models/Product.php';
require_once '../models/Category.php';

require_once '../models/Collection.php';

if (isset($_GET['category_id'])){
    $category_id = $_GET['category_id']; 
    $category  = new Category($category_id);
    $category_title = $category->title;
} else {
    $category_id = false;
    $category_title = 'Все товары';
}

if (isset($_GET['collection_id'])){
    $collection_id = $_GET['collection_id']; 
    $collection  = new Collection($collection_id);
    $collection_title = $collection->title;
    $page_title =  $collection->title . '-' . $category->title  ;

} else {
    $collection_id = false;
    $collection_title = 'Каталог';
    $page_title = 'Все товары';
}



$products = Product::getAll($collection_id, $category_id);
$categories = Category::getAll();
require_once '../views/catalog.php';
