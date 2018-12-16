<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'shop0408';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
$mysqli->set_charset('utf8');
