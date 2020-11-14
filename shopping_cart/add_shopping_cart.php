<?php
include "../database.php";
$db = new \Database\database("myitedu");
$qty = $_POST['qty']??null;
$product_id = $_POST['product_id']??null;
$user_id = $_POST['user_id']??99;

if (empty($qty) || empty($product_id)){
    exit("Either qty product_id field is empty");
}

$sql = "INSERT INTO shopping_cart (product_id, qty, user_id) VALUES ($product_id, $qty, $user_id)";

$add = $db->sql($sql);

$db = new \Database\database("myitedu");
$sql = "SELECT * FROM shopping_cart WHERE product_id = $product_id;";
$product = $db->sql($sql);

if (!empty($product)){
    $db = new \Database\database("myitedu");
    $sql = "UPDATE shopping_cart SET qty = $qty, user_id = $user_id WHERE product_id = $product_id;";
    $product = $db->sql($sql);
    exit(1);
}else{
       $db = new \Database\database("myitedu");
       $sql = "INSERT INTO shopping_cart (product_id, qty, user_id) VALUES($product_id, $qty, $user_id);";
       $product = $db->sql($sql);
       exit(1);
}
exit(0);