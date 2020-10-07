<?php

namespace Builders\Companies;

use Builders\CarBuilder;
use Entities\Car;

class LamborginiBuilder extends CarBuilder{
    public function getResult() : Car{
        switch ($this->getNumDoors()) {
            case 2:
                return new Car("Lamborgini" , "Galardo" , $this->getColor() , $this->getNumDoors());
                break;
            case 4:
                return new Car("Lamborgini" , "URUS" , $this->getColor() , $this->getNumDoors());
                break;
            default:
                return null;
                break;
        }
    }
}