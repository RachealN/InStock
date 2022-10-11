<?php

namespace App\SolidPrinciples\DIP\DIPBefore;

class SendWelcomeMessage
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}
