<?php

namespace App\SolidPrinciples\OCP\OcpAfter;

class ProjectManagement
{
    public function process(Workable $member)
    {
        return $member->work();
    }
}
