<?php

namespace App\SolidPrinciples\OCP\OcpBefore;

use App\OCP\OcpBefore\Exception;

class Tester
{
    public function test()
    {
        return 'Testing';
    }
}

class Programmer
{
    public function code()
    {
        return 'Coding';
    }
}

class ProjectManagement
{
    public function process($member)
    {
        if ($member instanceof \App\OCP\OcpBefore\Programmer) {
            $member->code();
        } elseif ($member instanceof \App\OCP\OcpBefore\Tester) {
            $member->test();
        };

        throw new Exception('Invalid input member');

    }
}
