<?php

namespace App\SolidPrinciples\SRP\SRPExampleTwo\SRPAfter;

interface ReportFormattable
{
    public function format(Report $report);
}
