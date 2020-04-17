<?php
error_reporting(0);
//String = alfa numeric + characters
//Int = whole numbers -1000000 to 10000000
//Boolean = TRUE | FALSE or 1 | 0
//Floats or Double | Decimal numbers, -1.2500  tp 1.3000 pI = 3.14
//NULL = data type | NUll is declared but it has an empty value
//Array = series of data or information, a group of variables
//Iterables = array | object
//Constants = the opposite of variable it never changes its value.
//define ('DOB','08/26/1976');
//echo DOB;

$numbers = range(1,100);

foreach ($numbers as $i=>$number){

    if ($i%2==0){
        echo "<span class='two'>$i</span>";
    }

    if ($i%7==0){
        echo "<span class='seven'>$i</span>";
    }

    if ($i%7==0 && $i%13==0){
        echo "<span> both 7 and 13 </span>";

        if (!isset($name)){
            $file = "File:".__FILE__. " | Line:". __LINE__;
            error_log("An undefined variable \$name is used in " . $file);
        }
        echo $name;



        echo "<br>";
        echo "File:".__FILE__. " | Line:". __LINE__;
        echo "<br>";
    }
    echo "<hr>";
}

?>

<style>
    .two{
        color: #ffffff;
        background-color: #786cde;
    }
    .seven{
        color: #ff1518;
        background-color: #ffffff;
    }

</style>
