<?php

namespace App\DesignPatterns\Strategy;

class LogToDatabase implements Logger
{
    public function log($data)
    {
        var_dump('Log this to the database');

        return $this;
    }
}
