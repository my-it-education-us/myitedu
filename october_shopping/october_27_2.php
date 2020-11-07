<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="/jquery-3.5.1.js"></script>
    <title>Document</title>

</head>
<body>
<?php

include "../database.php";
$db = new \Database\database("myitedu");
$products = $db->sql("SELECT * FROM products;");

$qty=0;

$parms = $_GET;
$id = $parms['id']??0;
$qty = $parms['qty']??0;
$action = $parms['action']??null;



if (empty($_SESSION['products']['qty'])){
    $_SESSION['products']['qty'] = 0;
}

if ($action == 'empty'){
    $db = new \Database\database("myitedu");
    $sql = "DELETE FROM shopping_cart;";
    $product = $db->sql($sql);
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
        $db = new \Database\database("myitedu");
        $sql = "INSERT INTO shopping_cart (product_id, qty, user_id) VALUES($id, $qty, 99);";
        $product3 = $db->sql($sql);
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
<div class="container-fluid">

    <div class="large_image_window">

    </div>

    <div data-toggle="modal" data-target="#staticBackdrop" class="shopping_cart">22</div>

    <h4>Our Products</h4>

    <hr>


    <table class="table table-bordered">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>QTY</th>
        </tr>

        <?php
        foreach ($products as $product) {
            ?>
            <tr>
                <td>
                    <img data-img_url="<?php echo $product['icon']; ?>" class="product_icon" src="<?php echo $product['icon']; ?>">
                </td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td>
                    <?php
                    $price = $newprice = $product['price'];
                    $discount = $product['discount'];

                    if ($discount>0) {
                        $newprice = $price - ($price * $discount / 100);
                        echo "<span class='discount'> $discount</span>";
                        echo  "<img class=\"dis_icon\" src = \"https://cdn.iconscout.com/icon/premium/png-256-thumb/discount-2595609-2166035.png\">";
                        echo "<span class='newpr'> \$$newprice</span>";
                        echo "<br>";
                        echo "<span class='oldpr'> \$$price</span>";
                    }else {
                        echo "$".$price;
                    }
                    ?>
                </td>
                <?php
                if ($product['qty']){
                    ?>
                    <td>
                        <form>
                            <select name="qty">
                                <?php
                                display_select_options($product['qty']);
                                ?>
                            </select>
                            <input name="id" type="hidden" value="<?php echo $product['id']?>">
                            <input value="" class="product" type="submit" name="sbt_btn">
                        </form>
                    </td>
                    <?php
                }else{
                    ?>
                    <td>Out of Stock</td>

                    <?php
                }
                ?>

            </tr>
            <?php
        }
        ?>

    </table>


</div>

<style>
    .large_image_window{
        width: 300px;
        height: 300px;
        position: absolute;
        left: 15%;
        top: 30%;
        display: none;

    }

    .discount{
        color: darkred;
    }
    .newpr{
        color: #730505;
    }
    .oldpr{
        text-decoration: line-through;
        color: silver;
    }
    .dis_icon{
        width: 30px;
        position: relative;
        right: 2px;
        top: 2px;
    }
    .product {
        background-image: url("https://cdn2.iconfinder.com/data/icons/e-commerce-4/256/Add_to_Shopping_Basket-512.png");
        background-size: 90% 90%;
        background-position: center;
        background-color: #1abe1a;
        width: 35px;
        height: 35px;
        position: relative;
        top: 9px;
        box-shadow: 0 4px;
        color: grey;
        border-radius: 50%;

    }
    .product:active{
        box-shadow: 0 1px;
        transform: translateY(3px);
        color: red;
    }
    .product:hover{
        background-color: #00ee00;
    }

    .shopping_cart {
        width: 40px;
        height: 40px;
        position: absolute;
        right: 20px;
        top: 20px;
        z-index: 100;
        background-image: url("https://i.pinimg.com/originals/5d/26/a1/5d26a173f443cbd190e34481438d474b.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        line-height: 38px;
        color: red;
        font-weight: bolder;
        border: none !important;
        box-shadow: 0 4px;
        border-radius: 50%;
    }
    .shopping_cart:active{
        box-shadow: 0 1px;
        transform: translateY(3px);
        color: red;
    }
    .shopping_cart:hover{
        background-color: blue;
    }

    .sh_add_btn {
        width: 30px;
    }

    tr:hover {
        background-color: #b3e096 !important;
        cursor: pointer;
    }

    th {
        background-color: #033b6e;
        color: whitesmoke;
    }

    tr:nth-child(even) {
        background-color: lavenderblush;
    }
    tr:nth-child(odd) {
        background-color: lightgray;
    }


    .product_icon {
        width: 70px;
    }

    h4 {
        color: lightgreen;
    }

    table {
        background-color: whitesmoke;
    }

    .container-fluid {
        text-align: center;
        background-color: silver;
    }
    body{
        background-color: #730505;
    }
    .display_img{
        width: 100%;
    }
</style>

<script>
    $(function (){
        $(".large_image_window").empty().hide();

        $(".product_icon").mouseover(function (){
            let img_url = $(this).data("img_url");
            let img = "<img class='display_img' src='"+img_url+"'>";
            $(".large_image_window").fadeIn('slow').html(img);

        });
        $(".product_icon").mouseleave(function (){
            $(".large_image_window").empty().hide();

        });
    });


</script>

<?php
include "modal.php";
?>

</body>
</html>

