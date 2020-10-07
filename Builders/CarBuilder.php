<?php 

namespace Builders;

use Interfaces\ICarBuilder;

abstract class CarBuilder implements ICarBuilder{
    private $color;
    private $numDoors;

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor() : string {
        return $this->color;
    }
    
    public function setNumDoors($numDoors){
        $this->numDoors = $numDoors;
    }

    public function getNumDoors() : int {
        return $this->numDoors;
    }
}