<?php

// $products = file_get_contents('https://dummyapi.online/api/products');
$products = file_get_contents('https://dummyjson.com/products');
$products = json_decode($products, true);
$products = $products['products'];
// echo '<pre>';
// print_r($products[0]);
// echo '</pre>';
$msg = "";
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $msg = 'You search for this: ' . $_GET['search'];
} else {
    $msg = 'You did not search for anything';
}
require_once './homepage.php';