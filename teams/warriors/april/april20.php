<?php
namespace Auto;

class Vehicles{
    public $color, $make, $model, $engine, $year, $price;

    public function drive(){
        return $this->model." is driving and its color is ". $this->color;
    }

    public function stop(){
        return "Stopping the car";
    }

    public function backup(){
        return "The car is backing up";
    }
}
