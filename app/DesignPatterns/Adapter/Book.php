<?php

namespace App\DesignPatterns\Adapter;

class Book implements BookInterface
{
    public function open()
    {
        var_dump('Open this Book');

        return $this;
    }

    public function turnPage()
    {
        var_dump('Turn the page for this book');

        return $this;
    }
}
