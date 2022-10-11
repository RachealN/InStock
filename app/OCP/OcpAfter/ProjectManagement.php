<?php

namespace App\OCP\OcpAfter;

class ProjectManagement
{
    public function process(Workable $member)
    {
        return $member->work();
    }
}
