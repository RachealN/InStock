<?php

namespace App\SolidPrinciples\ISP\ISPAfter;

class Programmer implements Codeable,Testable
{
    public function code()
    {
        return 'Coding';
    }

    public function test()
    {
        return 'Tetsing';
    }
}
