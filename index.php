<?php

require("./autoload.php");

use Builders\Companies\FerrariBuilder;
use Builders\Companies\LamborginiBuilder;
use Directors\SportsCarBuildDirector;

$Ferraribuilder = new FerrariBuilder();
$FerrariDirector = new SportsCarBuildDirector($Ferraribuilder);

$FerrariDirector->build();
$Ferrari = $Ferraribuilder->getResult();
$Ferrari->toString();
$Ferrari->drive();

$Lamborginibuilder = new LamborginiBuilder();
$LamborginiDirector = new SportsCarBuildDirector($Lamborginibuilder);

$LamborginiDirector->build("blue" , 4);
$Lamborgini = $Lamborginibuilder->getResult();
$Lamborgini->toString();
$Lamborgini->drive();
