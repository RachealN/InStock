<?php

namespace App\DIP\DIPAfter;

class SendGripMailer implements  Mailer
{
    public function send()
    {
        return 'Sending';
    }
}
