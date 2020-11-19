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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<body>
<?php

include "includes/index_include.php"; ?>
<div class="container-fluid">
    <div class="large_image_window">

    </div>
    <div data-toggle="modal" data-target="#staticBackdrop" class="shopping_cart">
        <?php
        $session_qty = $_SESSION['products']['qty']??0;
        echo $session_qty;
        ?>
    </div>
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
                    $price= $newprice = $product['price'];
                    $discount = $product['discount'];
                    if ($discount>0) {
                        $newprice =  ($price * $discount / 100);
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
                        <select id="qty_<?php echo $product['id']?>" name="qty">
                            <?php
                            display_select_options($product['qty']);
                            ?>
                        </select>
                        <input data-product_id="<?php echo $product['id']?>" value="" class="product" type="submit" name="sbt_btn">
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

<?php
include "modal.php"; ?>
<script src="js/script.js"></script>
</body>
</html>




