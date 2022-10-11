<?php

namespace App\SolidPrinciples\ISP\ISPBefore;

class ProjectProgrammer
{
    public function process(Workable $member)
    {
        if ($member->canCode())
        {
            $member->code();
        }
    }
}
