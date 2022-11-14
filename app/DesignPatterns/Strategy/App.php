<?php

namespace App\DesignPatterns\Strategy;

class App
{
    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }
}
