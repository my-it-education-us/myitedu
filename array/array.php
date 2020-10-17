<?php
function findDuplicates($array1,$array2)
{
    $combined = array_merge($array1,$array2);
    $counted = array_count_values($combined);
    $dupes = [];
    $keys = array_keys($counted);
    foreach ($keys as $key)
    {
        if ($counted[$key] > 1)
        {$dupes[] = $key;}
    }
    sort($dupes);
    return $dupes;
}
$array1 = [1,2,3,4,5];
$array2 = [4,5,6,7,8];
$dupes = findDuplicates($array1,$array2);
print_r($dupes);