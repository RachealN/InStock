<?php

namespace App\OOP\Inheritence\SingleLevelInheritance;

class CargoShip
{
    public function name(){
        return "Ship XX";
    }

    public function color(){
        return "white";
    }
}


class PassangerShip extends CargoShip
{
    public function ticket()
    {
        return 10000;
    }

    public function ships()
    {
        $this->name();
        $this->color();
        $this->ticket();

    }
}

$ship = new PassangerShip();
$ship->ships();
