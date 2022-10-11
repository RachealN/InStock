<?php

namespace App\SRP\SRPExampleTwo\SRPAfter;

class JsonReportFormatter implements ReportFormattable
{
    public function format(Report $report)
    {
        return json_encode($report->getContent());
    }
}
