 <?php

define('DB_NAME', 'new-mlm');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$connection) 
{
    die("Database connection failed: " . mysqli_error()); 
}

$hema="hema";


?>