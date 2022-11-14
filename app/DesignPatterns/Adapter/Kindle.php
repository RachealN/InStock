<?php

namespace App\DesignPatterns\Adapter;

class Kindle implements eReaderInterface
{
    public function turnOn()
    {
        return "Turn on Kindle ";
    }

    public function pressNextButton()
    {
        return "Press the next button - kindle";
    }
}
