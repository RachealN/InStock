<?php

namespace App\DesignPatterns\Strategy;

class LogToXServices implements Logger
{
    public function log($data)
    {
        var_dump('Log this to the Saas Services');

        return $this;
    }
}
