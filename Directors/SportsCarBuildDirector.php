<?php

namespace Directors;

use Builders\CarBuilder;

class SportsCarBuildDirector{
    private $_builder;

    public function __construct(CarBuilder $builder){
        $this->_builder = $builder;
    }

    public function build($color = "red" , $numDoors = 2) {
        $this->_builder->setColor($color);
        $this->_builder->setNumDoors($numDoors);
    }
}