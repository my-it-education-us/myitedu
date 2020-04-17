<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<?php
    $result = 0;
    $num1 = $_GET['num1']??5;
    $operator = $_GET['operator']??'+';
    $num2 = $_GET['num2']??5;

    if (empty($num1)){
        $num1 = 5;
    }
    if (empty($operator)){
        $operator = '+';
    }
    if (empty($num2)){
        $num2 = 5;
    }

    $result = eval('return '.$num1.$operator.$num2.';');
?>
<h3>My Basic Calculator</h3>
<form method="get">
    <p>
        Result: <?php echo $result;?>
    </p>
    <p>
        <input required="required" name="num1" type="number" placeholder="Number 1">
    </p>
    <p>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </p>
    <p>
        <input required="required"  name="num2" type="number" placeholder="Number 2">
    </p>
    <p>
        <button type="submit">Calculate</button>
    </p>
</form>

</body>
</html>
