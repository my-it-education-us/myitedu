<?php
###### ******* STRINGS ******** ######
//What is a string? Computing a linear sequence of characters, words, or other data.
//strlen - measures the lenght of string
//str_word_count($text) - counts the total number of words in the string.
//strtolower($text) - makes the string lower case
//strtoupper($text) - makes the string upper case
//trpos($text, '@') - Find the position of the first occurrence of a substring in a string
//str_replace('toshmatov','.smith', $text) - search and replace in the string
//strcmp($text, $text2); //if two strings are equal then it gives you 0. if you receive -1 than first string is short of that many characters if you receive positive that means the first character has that many extra characters.
//str_repeat($text, 10) - it repeats the string as many times as the multiplier
//str_shuffle($text) - it shuffles the string
//str_pad($text,5, '*') - add additional string to the end by making up the number in pad_length
//str_split($text, 3) - splits up by split_length
########################################
//check if the variable is integer is_int or is_integer -1000000 to 10000000

###### ******* ARRAYS ******** ######
/*
 * $cars = ['Audi','BMW','Mercedes','Alfa Romeo','Honda','Toyota','Nexia','Jiguli'];
   echo count($cars);
 */
//$cars = ['Audi','BMW','Mercedes','Alfa Romeo','Honda','Toyota','Nexia','Jiguli'];
//array_merge($students_a, $students_b) - merging two arrays
//array_rand($students_a) - generate a random position number from the array
//array_values($students_a) - display only values
//array_diff($students_a, $students_b) - show the difference. either missing ones or not matching ones
echo "<pre>";
$students_a = ['Jon','Jessica','Malika','Jason','Zarina','Bekhruz','Jackoff','Alisher','Valeria'];
$students_b = ['Jon','Jessica','Malika','Jason','Karina','Bekhruz'];
$results = array_diff($students_a, $students_b);

echo "<hr>";


$students_a = ['Jon','Jessica','Malika','Jason','Zarina','Bekhruz','Jack','Alisher','Valeria'];
$students_b = ['Muxabbat','Nargiza','Bobir','Jasur','Otabek','Murod','Sayora','Bekzod','Nigina'];
$students_ab = array_merge($students_a, $students_b);
print_r($students_ab);










