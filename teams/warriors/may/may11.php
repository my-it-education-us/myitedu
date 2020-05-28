<?php
//1) File System - I/O
//2) String Patterns
//Explode vs Impode
//PHP works Linux

//(800)123-4567

//$phone = "(800)123-4567";
$str = "(800) 123-4567";

$validate = preg_match("#^(\([0-9]{3,3}\))\s([0-9]{3,3})-([0-9]{4,4})$#",$str, $match);

echo "<pre>";
var_dump($match);
