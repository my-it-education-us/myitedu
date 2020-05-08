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
/*$students_a = ['Jon','Jessica','Malika','Jason','Zarina','Bekhruz','Jackoff','Alisher','Valeria'];
$students_b = ['Jon','Jessica','Malika','Jason','Karina','Bekhruz'];
$results = array_diff($students_a, $students_b);
$students_a = ['Jon','Jessica','Malika','Jason','Zarina','Bekhruz','Jack','Alisher','Valeria'];
$students_b = ['Muxabbat','Nargiza','Bobir','Jasur','Otabek','Murod','Sayora','Bekzod','Nigina'];
$students_ab = array_merge($students_a, $students_b);
print_r($students_ab);*/
//May 5, 2020
//$variable = ['Audi','Alfa Romeo','BMW','Mercedes','Mazeratti','BMW'];
//$result = array_keys($variable,'BMW');
//$result = array_push($variable,'Jiguli'); //Inserts the element off the end of array
//Adds Jiguli off the end of ['Audi','Alfa Romeo','BMW','Mercedes','Mazeratti','BMW','Jiguli'];
//$result = array_unshift($variable, 'Nissan');//Remove a portion of the array and replace it with something else. like array_push it addes a variable but only the front
//$result = array_pop($variable); //It removes the last value of the array
//$result = array_shift($variable); //It removes the value index of the array
//$result = array_sum($vars); it adds or sums all the values in the array
//array_chunk($variable,2); it divides up by size
//$variable = ['Audi','Alfa Romeo','BMW','Mercedes','Mazeratti','BMW'];
//$variable2 = ['Nissan','Huynday','Toyota','Nexia','Lada'];
//$result = array_replace($variable, $variable2); it replaces the variable values
//$result = array_pad($variable,10,'999'); it fills up the remaining values with the pad_value
//Return the values from a single column in the input array
//$result =  array_column($variable,'age'); yanks out of the column from array
//$result =  array_search('Zarina',$variable); searches the value in array and returns the postion
//$result =  array_reverse($variable); Return an array with elements in reverse order
echo "<pre>";
//$variable = ['apple','peach','lemon','lime','strawberry','blackberry','pomogranate','grepes','watermelon','melon'];

$numbers = range(0, 100);

foreach ($numbers as $number){
    if ($number%2==0){
        echo "<div class='even'>$number</div>";
    }else{
        echo "<div class='odd'>$number</div>";
    }
}


?>
<style>
    body{
        color:white;
    }
    .even{
        background-color: darkgreen;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border:1px solid black;
        display: inline-block;
        margin:10px;
        text-align: center;
        line-height: 30px;
    }

    .odd{
        background-color: #ff461f;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border:1px solid black;
        display: inline-block;
        margin:10px;
        text-align: center;
        line-height: 30px;
    }
</style>

















