<?php

namespace App\ISP\ISPAfter;

class ProjectManagement
{
    public function process(Codeable $member)
    {
        $member->code();
    }
}
