<?php

namespace App\Clients;

use App\Models\Stock;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

interface Client
{
    public function checkAvailability(Stock $stock): StockStatus;

}
