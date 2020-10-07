<?php 

namespace Entities;
/// <summary>
/// Represents a product created by the builder
/// </summary>
class Car{
    public $make;
    public $model;
    public $numDoors;
    public $color;

    function __construct($make , $model , $color , $numDoors){
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->numDoors = $numDoors;
    }

    function toString(){
        echo "$this->make $this->model has $this->numDoors doors and colored $this->color\n";
    }

    function drive(){
        echo "Driving $this->make $this->model \n";
    }
}