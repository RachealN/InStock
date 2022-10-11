<?php

namespace App\SRP;

Class SalesReporterAfter
{
    private $repository;

    public function __construct( SalesRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function between($startDate, $endDate, SalesOutputFormatter $formatter)
    {
        $sales = $this->repository->between($startDate, $endDate);
        return $formatter->salesFormatter($sales);
    }
}
