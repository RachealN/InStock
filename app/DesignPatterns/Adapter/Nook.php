<?php

namespace App\DesignPatterns\Adapter;

class Nook implements eReaderInterface {

    public function turnOn()
    {
        var_dump('turn the Nook on');

        return $this;
    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Nook');

        return $this;
    }

}
