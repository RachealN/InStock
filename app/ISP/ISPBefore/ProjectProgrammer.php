<?php

namespace App\ISP\ISPBefore;

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
