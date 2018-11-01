<?php

define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'eshop');
define('ORDERS_LOG', 'orders.log');
$basket = [];
$count = [];

// Create connection
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
    echo "Connection Successful";