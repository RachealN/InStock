<?php

namespace App\SolidPrinciples\DIP\DIPAfter;

class SmtpMailer implements Mailer
{
    public function send()
    {
      return 'sending';
    }
}
