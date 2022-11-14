<?php

namespace App\DesignPatterns\Strategy;

class App
{
    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }
}


//$app = new App();
//$app->log('Log some new Information here', new LogToDatabase());
