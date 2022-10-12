<?php

namespace App\OOP\Interfaces;

class SumProduct implements SimpleCalculation
{
    public function divide()
    {
        $a = 20;
        $b = 10;
        $total = $a/$b;
        return $total;
    }

    public function compute()
    {
        $x = 30;
        $y = 40;
        $total = $x * $y;

        return $total;
    }
}

$cal = new SumProduct();
$cal->divide();
$cal->compute();
