<?php

namespace App\SolidPrinciples\LSP\LSPAfter;

use App\SolidPrinciples\LSP\LSPBefore\Rectangle;

class RectangleArea
{
    private $rectangle;

    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }

    public function areaOfRectangle()
    {
        $this->rectangle->setHeight(2);
        $this->rectangle->setWidth(3);
    }
}
