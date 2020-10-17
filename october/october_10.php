<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Sherbek's Document</title>
</head>
<body>
<form action="october_10.php" method="get">

    <?php
    $matched = null;

    for($i=1; $i<=1; $i++){
    $rand = rand(1, 9);
    $random = rand(1,9);
    $ran = rand(1,9);
    $rando = rand(1,9);
    $ra= rand(1,9);
    $r = rand(1,9);
    $rang = rand(1,9);
    $change = rand(1,9);
    $backup = rand(1,9);

    ?>

        <div class="mytable">
            <h3>Sherbek's Game</h3>
            <table class="table">
                <tr>
                    <td><?php echo $rand ?></td>
                    <td><?php echo $random ?></td>
                    <td><?php echo $r ?></td>
                </tr>
                <tr>
                    <td><?php echo $ran ?></td>
                    <td><?php echo $rando ?></td>
                    <td><?php echo $ra ?></td>
                </tr>
                <tr>
                    <td><?php echo $rang ?></td>
                    <td><?php echo $change ?></td>
                    <td><?php echo $backup ?></td>
                </tr>
            </table>

            <?php
            }

            ?>




            <div class="button">
                <button name="start" class="start" type="reset">Start Over</button>
                <button class="go" type="submit">Start</button>
            </div>
        </div>

</form>
<style>

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
    .bucket{
        visibility: visible !important;
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
    .mytable {
        width: 360px;
        height: auto;
        margin: 100px auto;
        text-align: center;
    }


    table, th, td {
        border: 1px solid white;
    }






</style>


</body>
</html>
