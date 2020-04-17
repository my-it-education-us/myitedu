<?php

//Arrays
//$cars = ['Alfa','Audi','BMW','Mercedes'];

//foreach
/*
 foreach ($cars as $counter=>$car){
    echo $counter.') '.$car. '<br>';
}

$jon = 0;
for ($i=0; $i<count($cars); $i++){
    $jon++;
    echo $jon.') '.$cars[$i].'<hr>';
}

$i=0;
while ($i<count($cars)){
    echo $cars[$i].'<hr>';
    $i++;
}


$i = 0;
do {
    echo $cars[$i]."<br>";
    $i++;
} while ($i < count($cars));


foreach ($cars as $car){


    if ($car == 'BMW'){
        echo 'This car is sold <br>';
        continue;
    }

    echo $car."<br>";

}

$age = 70;

switch ($age){
    case 25:
        echo "Your can become a congressman";
        break;
    case 35:
        echo "Your can become a company CEO";
        break;
    case 45:
        echo "Your can become a millioner";
        break;
    case 55:
        echo "Your can become travel the world";
        break;
    case 70:
        echo "ENjoy your retirement";
        break;
    default:
        echo "Sorry, your age did not march";
        break;
}


//include, include_once
//require, require_once

goto B;

B:
echo "This is a home of the B <br>";
goto C;


C:
echo "This is a home of the C <br>";


D:
echo "This is a home of the D <br>";
*/


function jon(){
    echo "This is a new test";
}
call_user_func('jon');


