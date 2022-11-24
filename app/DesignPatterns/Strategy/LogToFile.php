<?php

namespace App\DesignPatterns\Strategy;

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('Log this to filesystem');

        return $this;
    }
}
