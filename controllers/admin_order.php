<?php

require_once '../models/User.php';
require_once '../models/Order.php';
require_once '../models/Product.php';
$order_id= $_GET['order_id'];

$products = Product::getAll(false, false , $order_id );

$order = new Order($order_id);

// $user = User(Order()->user_id);

// var_dump($users);

require_once '../views/admin_order.php';

// var_dump($order->order_id);
// var_dump($order->status);
// var_dump($order->address);
// //$userorder_id = $order->user_id);
// var_dump($order->comment);



