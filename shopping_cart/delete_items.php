<?php
session_start();
include "../database.php";
$db = new \Database\database("myitedu");
$product_id = $_POST['product_id']??null;

if (empty($product_id)){
    exit("Product id is empty");
}

$product_id = (int) $product_id;


$delete = $db->sql("DELETE FROM shopping_cart WHERE id = $product_id;");
if (!empty($_SESSION['products']['qty']) && $_SESSION['products']['qty']>0) {
    $_SESSION['products']['qty']--;
}
echo 1;


