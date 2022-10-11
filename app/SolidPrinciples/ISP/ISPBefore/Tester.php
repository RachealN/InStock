<?php

namespace App\SolidPrinciples\ISP\ISPBefore;

class Tester implements Workable
{
    public function canCode()
    {
        return false;
    }

    public function code()
    {
        throw new \Exception('Opps! I can not code');
    }

    public function test()
    {
        return 'Yes, I can Test';
    }
}
