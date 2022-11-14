<?php

namespace App\DesignPatterns\Adapter;

class Book implements BookInterface
{
    public function open()
    {
        return "Open this Book";
    }

    public function turnPage()
    {
        return "Turn the page for this book";
    }
}
