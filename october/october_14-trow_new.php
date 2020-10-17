<?php
function divide_numbers($num1, $num2){
    if ($num1==0){
        throw new Exception("\$num1 can not be 0");
    }
    if ($num2==0){
        throw new Exception("\$num2 can not be 0");
    }
    if ($num1>100){
        throw new Exception("\$num1 must be smaller than 100");
    }
    return $num2 / $num1;
}

try {
    $result = divide_numbers(111, 50);
    echo $result;
}catch(Exception $e){
    echo "The following error has occured: ".$e->getTrace();
}