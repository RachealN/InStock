<?php

namespace App\LSP\LSPBefore;

class Rectangle
{
    protected $width;
    protected $height;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        $this->width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}
