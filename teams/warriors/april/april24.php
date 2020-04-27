<?php

class Uzbekistan{

}

class NewYork{

}

class School{
    public function singSongs(NewYork $songs){
       echo "ALL IS GOOD and GOD IS GREAT!";
    }
}

$uzb = new Uzbekistan();
$newyork = new NewYork();


$school = new School();
$school->singSongs($uzb);