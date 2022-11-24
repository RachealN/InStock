<?php

namespace App\DesignPatterns\Adapter;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('Turn on Kindle');

        return $this;
    }

    public function pressNextButton()
    {
        var_dump('Press the next button - kindle');

        return $this;
    }
}
