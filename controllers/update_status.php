<?php

require_once '../models/Order.php';
// $order_id= $_GET['order_id'];
$statusoder= $_GET['status'];
$Order =new Order(updateStatus($statusoder)); 

header("Location: controllers/admin_order.php?order_id=$order_id");