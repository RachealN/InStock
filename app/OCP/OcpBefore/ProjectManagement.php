<?php

namespace App\OCP\OcpBefore;

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
        if ($member instanceof Programmer) {
            $member->code();
        } elseif ($member instanceof Tester) {
            $member->test();
        };

        throw new Exception('Invalid input member');

    }
}
