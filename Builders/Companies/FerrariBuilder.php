<?php

namespace Builders\Companies;

use Builders\CarBuilder;
use Entities\Car;

class FerrariBuilder extends CarBuilder {
    public function getResult() : Car {
        return $this->getNumDoors() == 2 ? new Car('Ferrari' , "488 Spider" , $this->getColor() , $this->getNumDoors()) : null;
    }
}