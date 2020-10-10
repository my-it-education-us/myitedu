<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="hw-oct_07.php" method="post">
    <?php
    $matched = 0;


    for($i=1; $i<=100; $i++){
        $rand = rand(1, 100);
        $bucket = null;

        if ($rand%$i==0){
            $matched++;
            $bucket = 'bucket';
        }

        ?>
        <div class="section">
            <img class="win <?php echo $bucket; ?>" src="https://static.coloradolottery.com/media/cache/75/58/75583948b086f1a14c355b533fd5043c.png">
            <img class="icon" src="https://png.pngtree.com/png-clipart/20190520/original/pngtree-business-male-icon-vector-png-image_4187852.jpg">
        </div>
        <?php
    }

    echo "<br>";
    echo "<br>";

    echo "<div class='sher'><h2><var>$matched</var></h2><hr></div>";
    ?>

    <div>
        <button class="submit" type="submit">GOOO</button>
    </div>
</form>
<style>

    body {
        background-image: url("https://i.pinimg.com/564x/ec/df/0b/ecdf0bfe17ef266137174ac2cb8e85ba.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: white;
        text-align: center;

    }
    h2{
        color: white;
        display: block;
    }
    .sher{
        width: 50px;
        height: 50px;
        display: inline-block;
        color: white;;
        font-size: 25px;
    }

    .bucket{
        visibility: visible !important;
    }
    .section{
        float: left;
        display: inline-block;
    }

    .win {
        height: 70px;
        width: 70px;
        position: relative;
        left: 100px;
        visibility: hidden;
        font-size: medium;
    }


    .icon{
        width: 100px;
        height: auto;
        border-radius: 25px;

    }


</style>
</body>
</html>
