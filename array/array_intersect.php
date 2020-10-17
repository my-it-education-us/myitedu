<?php

function Intersect($array1, $array2, $array3)
{
    $result = array_intersect($array1, $array2, $array3);
    return($result);
}

$array1 = array(5, 10, 15, 20, 25, 30);
$array2 = array(20, 10, 15, 55, 100, 110, 30);
$array3 = array(10, 15, 30, 55, 100, 95);
print_r(Intersect($array1, $array2, $array3));
