<?php
namespace Auto;
class Honda{


    public function browsing(){
        echo "You are browsing the store<hr>";
    }

    public function checkingout(){
        echo "You are ready to checkout<hr>";
    }

    public function __construct()
    {
        echo "You are borrowing a basket<hr>";
    }


    public function __destruct()
    {
        echo "You are returning the basket<hr>";
    }

}

$car = new Honda();
$car->browsing();
$car->checkingout();