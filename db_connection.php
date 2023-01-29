<?php
// $host = "localhost";
// $pass = "nUkp-q[M";

$host = "php_8_mysql";
$pass = "pass";
$user = "root";
$database = "Proyecto";
$db = mysqli_connect($host, $user, $pass, $database) or die('MySQL connect failed. ' . mysqli_connect_error());