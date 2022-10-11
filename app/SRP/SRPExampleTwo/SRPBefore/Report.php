<?php

namespace App\SRP\SRPExampleTwo\SRPBefore;

class Report
{
    public function getTitle()
    {
        return 'Report Card';
    }

    public function getDate()
    {
        return '2022-10-10';
    }

    public function getContent()
    {
        return [
            'title' => $this->getTitle(),
            'date'  => $this->getDate()
        ];
    }

    public function formatJson()
    {
        return json_encode($this->getContent());
    }
}
