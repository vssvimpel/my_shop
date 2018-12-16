<?php

require_once '../models/Order.php';

// переделать на сессию передавать переменную для выбора всех заказов пользователя!
$orders = Order::getAll();

require_once '../views/buyer_orders.php';
