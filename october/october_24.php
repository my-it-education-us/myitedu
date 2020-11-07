<?php
//This is our array
$person = [
    'name' => 'Jon Toshmatov',
    'age' => 21,
    'is_citizen' => TRUE,
    'salary' => 55.000,
    'is_married' => FALSE,
    'shopping_cart' => NULL,
];

//We are serializing and unserializing the array
$person_after_serialized = serialize($person);
$person_after_unserialized = unserialize($person_after_serialized);

//We are inserting the both serialized and unserialized content to blog table
include_once "../database.php";
$db = new \Database\database("myitedu");
$sql = "INSERT INTO blogs (content) VALUES('\"$person_after_serialized\"');";
$insert = $db->sql($sql);

//I am rendering the result on the broswer
echo $person_after_serialized;
echo "<hr>";
echo "<pre>";
var_dump($person_after_unserialized);