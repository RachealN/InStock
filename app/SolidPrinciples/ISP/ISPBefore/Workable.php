<?php

namespace App\SolidPrinciples\ISP\ISPBefore;

interface Workable
{
    public function canCode();
    public function code();
    public function test();
}
