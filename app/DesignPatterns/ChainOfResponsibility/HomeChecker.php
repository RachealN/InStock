<?php

namespace App\DesignPatterns\ChainOfResponsibility;

interface HomeChecker
{
    public function check(HomeStatus $home);
}
