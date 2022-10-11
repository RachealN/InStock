<?php

namespace App\SolidPrinciples\ISP\ISPAfter;

class ProjectManagement
{
    public function process(Codeable $member)
    {
        $member->code();
    }
}
