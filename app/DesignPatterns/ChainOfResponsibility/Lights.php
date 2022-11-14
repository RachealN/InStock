<?php

namespace App\DesignPatterns\ChainOfResponsibility;

use Exception;

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new Exception('The lights are still on! Abort it!');

        }
        $this->next($home);
    }


}
