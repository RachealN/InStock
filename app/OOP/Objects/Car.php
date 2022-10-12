<?php

namespace App\OOP\Objects;

class Car
{
    public $name;
    public $type;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


//      $car = new Car();
//      $car->setName('Tesla New Model')
//      $car->getName();


}
