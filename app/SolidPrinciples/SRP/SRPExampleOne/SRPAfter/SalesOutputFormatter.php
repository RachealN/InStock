<?php
namespace App\SolidPrinciples\SRP\SRPExampleOne\SRPAfter;

class SalesOutputFormatter implements SalesFormatterInterface
{
    public function salesFormatter(float $sales)
    {
        return $sales;
    }
}
