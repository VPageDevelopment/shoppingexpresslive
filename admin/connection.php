<?php

define('DB_NAME', 'vpageinc_shop');
define('DB_USER', 'vpageinc_shopex');
define('DB_PASSWORD', 'shopping@123');
define('DB_HOST', 'localhost');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) 
{
    die("Database connection failed: " . mysqli_error()); 
}

?>