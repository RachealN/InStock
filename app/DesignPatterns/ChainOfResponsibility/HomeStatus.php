<?php

namespace App\DesignPatterns\ChainOfResponsibility;

class HomeStatus
{
    public bool $alarmOn = true;
    public bool $locked = true;
    public bool $lightsOff = true;

    public function succeedWith(HomeChecker $home)
    {
        $home->check($this);

        return $this;
    }
}


$locks = new Locks();
$lights = new Lights();
$alarm = new Alarm();

$home = new HomeStatus();

$home->succeedWith($locks)->succeedWith($lights)->succeedWith($alarm);
