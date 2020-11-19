<?php

include "../database.php";
$db = new \Database\database("myitedu");
$products = $db->sql("SELECT * FROM products;");

$qty=0;

$parms = $_GET;
$id = $parms['id']??0;
$qty = $parms['qty']??0;
$action = $parms['action']??null;


if ($action == 'empty'){
    $db = new \Database\database("myitedu");
    $sql = "DELETE FROM shopping_cart;";
    $product = $db->sql($sql);
    unset( $_SESSION['products']['qty']);
    session_destroy();
}

if ($qty == 'delete'){
    $db = new \Database\database("myitedu");
    $sql = "DELETE FROM shopping_cart WHERE product_id = $id;";
    $product = $db->sql($sql);
}

if ($qty>0) {
    $_SESSION['products']['qty'] += $qty;
    $db = new \Database\database("myitedu");
    $sql = "SELECT * FROM shopping_cart WHERE product_id = $id;";
    $product = $db->sql($sql);

    if (!empty($product)){
        $db = new \Database\database("myitedu");
        $sql = "UPDATE shopping_cart SET qty = $qty, user_id = 99 WHERE product_id = $id;";
        $product2 = $db->sql($sql);
    }else{
        //   $db = new \Database\database("myitedu");
        //   $sql = "INSERT INTO shopping_cart (product_id, qty, user_id) VALUES($id, $qty, 99);";
        //   $product3 = $db->sql($sql);
    }


}




function display_select_options($maxlimit=0)
{
    if ($maxlimit>0) {
        for ($i = 1; $i <= $maxlimit; $i++) {
            echo "<option name='product$i' value=\"$i\">$i</option>";
        }
    }else{
        echo "<option name='product1' value=\"0\">0</option>";
    }
    echo "<option name='product$i' value=\"delete\">Delete</option>";
}

?>