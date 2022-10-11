<?php

namespace App\SolidPrinciples\DIP\DIPAfter;

class SendGripMailer implements  Mailer
{
    public function send()
    {
        return 'Sending';
    }
}
