<?php

$cfHost = "localhost";
$cfUser = "root";
$cfPassword = "";
$cfDatabase = "shopping_cart";


$meConnect = mysqli_connect($cfHost, $cfUser, $cfPassword,$cfDatabase) or die("Error conncetion mysql...");
mysqli_set_charset($meConnect,"utf8");
