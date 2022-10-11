<?php

namespace App\SolidPrinciples\ISP\ISPBefore;

class Programmer implements Workable
{
    public function canCode()
    {
        return true;
    }

    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'Testing';
    }
}
