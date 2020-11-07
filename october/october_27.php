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
<?php
$number = $_GET['number']??3;
$number = (int) $number;
if ($number > 100){
    $number = 99;
}
?>
<div id="wrapper">
<form>
   <p>Enter: <input class="go" required="required" min="0" max="100" name="number" type="number" placeholder="Your number">
    <button type="submit">Goo</button>
    </p>
</form>
</div>

<?php

for ($row=1; $row<=$number; $row++){
   $num = $number / 2;
    if ($row <= $num){
        echo "<div class=\"ball ball1\">$row</div>";
    }else{
        echo "<div class=\"ball ball2\">$row</div>";
    }
}
      echo "<div class=\"ball ball3\">$num</div>";

?>

<style>
    #wrapper{
        text-align: center;
        margin: 15px auto;
        width: 700px;
        height: 100px;
        background-color: rgb(208,207,208);
        border-radius: 25px;
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: sans-serif;
    }
    .go{
        width: 500px;

    }
    .ball{
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: grey;
        border: darkred;
        text-align: center;
        line-height: 45px;
        font-size: 140%;
        display: inline-block;
        margin: auto;
    }
    .ball1{
        background-color: red !important;
    }
    .ball2{
        background-color: blue !important;
    }
    .ball3{
        background-color: chartreuse;
    }
</style>

</body>
</html>