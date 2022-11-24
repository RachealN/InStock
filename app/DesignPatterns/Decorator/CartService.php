<?php

namespace App\DesignPatterns\Decorator;


interface CartService
{
    public function getCost();
    public function getDescription();
}
