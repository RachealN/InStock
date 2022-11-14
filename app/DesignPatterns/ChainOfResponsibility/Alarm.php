<?php

namespace  App\DesignPatterns\ChainOfResponsibility;

use Exception;

class Alarm implements HomeChecker
{

    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new Exception('The alarm has not been set! Abort it!');
        }

        $this->next($home);
    }
}
