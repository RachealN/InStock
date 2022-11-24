<?php

namespace App\DesignPatterns\Decorator;

class BasicInspection implements CartService
{
    public function getCost()
    {
       return 25;
    }

    public function getDescription()
    {
        return 'This best inspection description';
    }
}
