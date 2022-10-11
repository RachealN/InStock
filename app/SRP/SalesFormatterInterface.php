<?php

namespace App\SRP;

use Carbon\Carbon;

interface SalesFormatterInterface
{
    public function salesFormatter(float $sales);
}
