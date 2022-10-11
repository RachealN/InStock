<?php

namespace App\SolidPrinciples\DIP\DIPAfter;

class SendWelcomeMessage
{
    private $mailer;

    public function __contruct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}
