<?php
namespace App\SRP;

class SalesOutputFormatter implements SalesFormatterInterface
{
    public function salesFormatter(float $sales)
    {
        return $sales;
    }
}
