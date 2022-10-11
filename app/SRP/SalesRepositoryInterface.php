<?php

namespace App\SRP;

use Carbon\Carbon;

interface SalesRepositoryInterface
{
    public function between(Carbon $startDate, Carbon $endDate);
}
