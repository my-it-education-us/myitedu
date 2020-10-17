<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<form action="random_num.php" method="post">
<?php
$nums = range(1, 9);
$numbers = array_chunk($nums,3);
?>

<div id="mytable">
    <table class="table table-bordered">

        <?php
        foreach ($numbers as $key=>$items){
            ?>
            <tr>
                <?php
                foreach ($items as $item){
                    echo "<td>" .rand(min($nums), max($nums))."</td>";

                }
                ?>
            </tr>
            <?php
        }
        ?>

    </table>
    <hr>

    <div id="results">
    <?php
    $combined = array_merge($nums, $nums);
        print_r(array_count_values($combined));
    ?>
    </div>

    <div class="button">
        <button name="start" class="start" type="reset">Start Over</button>
        <button class="go" type="submit">Start</button>
    </div>
</div>



</div>
</form>
<style>
    #mytable{
        width: 350px;
        height: auto;
        margin: 100px auto;
    }
    body {
        background-image: url("https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v462-n-130-textureidea_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=9465282a2b0a375f4f5b120d7bbad882");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        color: white;
        text-align: center;

    }
    h3{

        color: white;
    }
    .start{
        background-color: black;
        color: white;
        border-radius: 5px;
        margin-right: 15px;
        width: 130px;
    }
    .start:hover{
        background-color: rgba(0,0,0,0.3);
        color: red;
    }
    .go{
        background-color: limegreen;
        width: 150px;
        border: 1px solid limegreen;
        border-radius: 5px;
        color: black;
    }
    .go:hover{
        background-color: lime;
        color: red;
    }

    .button {
        text-align: center;
        margin-bottom: 10px;
    }

    td:hover {
        background-color: rgba(0,0,0,0.1);
        cursor: pointer;
    }

    table td {
        background-color: rgba(0,0,0,0.5);
        color: white;
        font-size: 3em;

    }
    table, th, td {
        border: 1px solid white;
    }

</style>

</body>
</html>
