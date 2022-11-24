<?php

namespace App\DesignPatterns\ChainOfResponsibility;

class HomeStatus
{
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;

    public function succeedWith(HomeChecker $home)
    {
        $home->check($this);

        return $this;
    }
}


$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

//The chain
$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);


