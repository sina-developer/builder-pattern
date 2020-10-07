<?php

namespace Interfaces;

use Entities\Car;
/// <summary>
/// The builder abstraction
/// </summary>
interface ICarBuilder{
    public function getResult() : Car;
}