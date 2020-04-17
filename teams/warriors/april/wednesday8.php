<?php
//What is a variable?
/*
 * Variables are data values that can change when the user is
 * asked a question, for example, their age. ...
 * The memory location is used to hold data.
 * The key difference when comparing a constant to a variable
 * is that the value associated with a variable name may change
 * during program execution.

* The main differences between a single and a double quotes

 */

//Our policy distates that usernames must be minimum 8 characters long and maximum 10 characters
//$username = $_GET['username']??null;
$username = 'HELLO there, My name is Jon';
$length = strlen($username); //To get the length of the string
$pad = str_pad($username,10, '-'.str_shuffle('username'));
$shuffle = str_shuffle('TOSHMATOV');
$repeat = str_repeat('jon',10);
$a = 'jon';
$b = 'Jon';
/*
$c = strcmp($a, $b); //if they are equal then 0; if positive number that is difference between a and b
echo strcmp("Hello world!","Hworld")."<br>";  //-1
echo strcmp("Hello world! ","Hello")."<br>";     //7
echo strcmp("Hello world!","Hworld world! Hello!")."<br>"; //-1
echo strcmp("Hello world!","Hello world! a")."<br>";    //-7
*/
//We will be skipping strtotime for now --> strtotime('last year');
$remove_html_tags = strip_tags($username);
$word_length = str_word_count($username);
/*
if ($word_length>3){
    echo "We apologize that we only accept 3 words long sentences";
}else{
    echo "we are good";
}
*/
//$make_string_lower_case = strtolower($username);
//$make_string_upper_case = strtoupper($username);
//echo
//print
//var_dump();
//print_r
//var_export
//Boolean
/*
$a = '10 apples';

if ($a == true){
    echo "It is true";
}else{
    echo "it is false";
}*/
//NULL is a data type it is empty and returns null
//Float Floating point numbers (also known as "floats", "doubles", or
// "real numbers") can be specified using any of the following syntaxes:

/*
 * Type casting
 * (int), (integer) - cast to integer
(bool), (boolean) - cast to boolean
(float), (double), (real) - cast to float
(string) - cast to string
(array) - cast to array
(object) - cast to object
(unset) - cast to NULL
 */

/*$age = 23;

if (is_int($age)){
    echo "Nice, thank you for giving me a number";
}else{
    echo "I asked you to give me only numbers or characters that presents only number. <br> Between 1 and 1000";
}*/
/*
$cars = ['Audi','Alfa','BMW'];
echo $cars[3]??'Mercedes';
In PHP 7, a new feature, null coalescing operator (??) has been
introduced. It is used to replace the ternary operation in
conjunction with isset() function. The Null coalescing operator
 returns its first operand if it exists and is not NULL;
 otherwise it returns its second operand.
*/
/*
$fruites = [
    'apple','orange','apple','pear','strawberry','lime', 'peach',
    'apple','orange','apple','pear','strawberry','blackberry', 'peach',
    'strawberry','orange','apple','pear','strawberry','blackberry', 'peach',
    'apple','orange','apple','pear','strawberry','lemon', 'peach',
    'apple','orange','orange','pear','strawberry','blackberry', 'peach',
    'kiwi','orange','apple','pear','strawberry','blackberry', 'peach',
    'apple','orange','apple','pear','strawberry','blackberry', 'peach',
    'watermelon','orange','apple','pear','apple','melon', 'peach',
    'apple','orange','apple','pear','strawberry','blackberry', 'peach',
    'pomogranate','orange','apple','pear','strawberry','blackberry', 'peach',
    'apple','orange','apple','pear','peach','blackberry', 'peach',
];

echo "<pre>";

$bobby = [];
$jon = [];
$jessica = [];
$total = 0;
foreach ($fruites as $num=>$fruite){
    $total++;
    if ($fruite=='apple'){
        $bobby[$num] = $fruite;
    }elseif ($fruite=='orange'){
        $jessica[$num] = $fruite;
    }else{
        $jon[$num] = $fruite;
    }
}

echo "<pre>";

echo "Bobby:";
echo count($bobby);
echo "<hr>";*/

/*
echo "Jessica:";
echo count($jessica);
echo "<hr>";

echo "Jon:";
echo count($jon);
echo "<hr>";


echo "Total:";
echo $total;
echo "<hr>";*/



$candies = array(
    array('Snickers',12,25),    #0
    array('Hershey',25,50),     #1
    array('Milky Way',10,20),  #2    //ASK JON AKA WHY THIS CODE IS GIVING 2550 I WANT JUST 50
    array('Reeses',30,60)       #3
    #   0      1  2
);
echo "<pre>";
echo $candies[1][2];






?>

