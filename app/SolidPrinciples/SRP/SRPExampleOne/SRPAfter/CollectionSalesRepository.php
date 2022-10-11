<?php

namespace App\SolidPrinciples\SRP\SRPExampleOne\SRPAfter;

use Carbon\Carbon;

class CollectionSalesRepository implements SalesRepositoryInterface
{
    public function between(Carbon $startDate, Carbon $endDate)
    {
        return collect([
                'created_at' => new Carbon('2022-10-10 14:40:40' ),
                'charge' => '5000',

            ])->whereBetween('created_at', [$startDate, $endDate])->sum('charge')/100;
    }
}
