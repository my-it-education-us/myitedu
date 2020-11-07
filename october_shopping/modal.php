<?php

$db = new \Database\database("myitedu");
$products = $db->sql("SELECT *, sc.qty AS sqty FROM shopping_cart AS sc
JOIN products AS p
ON sc.product_id = p.id WHERE sc.user_id = 99;");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Your order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                    <?php
                    $tax = 0;
                    $grandtotal = 0;
                    $prices = 0;
                    $qtys = 0;
                    foreach ($products as $product) {
                        $prices+=$product['price'];
                        $qtys+=$product['sqty'];
                        $total = $product['price'] * $product['sqty'] - ($product['price'] * $product['discount']/100);
                        $tax += $total * 0.08;
                        $grandtotal+=$total+($total * 0.08);
                        ?>
                        <tr>
                            <td>
                                <img class="product_icon" src="<?php echo $product['icon']; ?>">
                            </td>
                            <td><?php echo $product['name']; ?></td>

                            <td>
                                $<?php echo $total;?>
                            </td>
                            <td><?php echo $product['sqty'];?></td>
                            <td>
                                <?php
                                echo "\$$total";
                                ?>

                            </td>
                            <td class="last_td">
                             <img class="remove_item_icon" data-dismiss="remove" aria-label="delete" src="https://image.flaticon.com/icons/png/512/61/61848.png">
            </td>
                        </tr>
                        <?php
                    }
                    ?>

                    <tr>
                        <td colspan="4">Tax</td>

                        <td class="total" >$<?php echo round($tax,2);?></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2">Grand Total</td>
                        <td>$<?php echo $prices;?></td>
                        <td><?php echo $qtys;?></td>
                        <td class="total">$<?php echo round($grandtotal,2);?></td>
                        <td>&nbsp;</td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">check out</button>
            </div>
            <a class="btn btn-success" href="october_27_2.php?action=empty">Empty Shopping Cart</a>

        </div>
</div>

<style>
    .total:hover{
        background-color: black;
        color: white;
    }
    .remove_item_icon:hover {
        animation: shake 0.5s;
        animation-iteration-count: infinite;
    }

    @keyframes shake {
        0% { transform: translate(1px, 1px) rotate(0deg); }
        10% { transform: translate(-1px, -2px) rotate(-1deg); }
        20% { transform: translate(-3px, 0px) rotate(1deg); }
        30% { transform: translate(3px, 2px) rotate(0deg); }
        40% { transform: translate(1px, -1px) rotate(1deg); }
        50% { transform: translate(-1px, 2px) rotate(-1deg); }
        60% { transform: translate(-3px, 1px) rotate(0deg); }
        70% { transform: translate(3px, 1px) rotate(-1deg); }
        80% { transform: translate(-1px, -1px) rotate(1deg); }
        90% { transform: translate(1px, 2px) rotate(0deg); }
        100% { transform: translate(1px, -2px) rotate(-1deg); }
    }


    .btn-secondary{
        width: 115px;
    }
    .btn-primary{
        width: 115px;
    }
    .btn-success{
        width: 250px;
        left: 15px;
        bottom: 15px;
        margin: 25px;
    }
    .modal-content{
        width: 800px;
    }
    .modal-header{
        color: grey;
    }
    .last_td{
        text-align: center;
        width: 50px;
    }
    .remove_item_icon{
        width: 33%;
    }
</style>
</body>
</html>