<?php

namespace App\SRP\SRPExampleOne\SRPAfter;

use Carbon\Carbon;

interface SalesRepositoryInterface
{
    public function between(Carbon $startDate, Carbon $endDate);
}
