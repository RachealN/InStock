<?php

namespace App\SRP;

use Carbon\Carbon;

Class SalesReporterBefore
{
    public function between($startDate, $endDate){

        $sales = $this->salesBetween($startDate,$endDate);
        return $this->format($sales);

    }

    protected function salesBetween(Carbon $startDate, Carbon $endDate)
    {
        return collect([
                'created_at' => new Carbon('2022-10-10 14:43:40' ),
                'charge' => 500

            ])->whereBetween('created_at', [$startDate, $endDate])->sum('charge')/100;

    }

    protected function format(float $sales)
    {
        return $sales;
    }

}
