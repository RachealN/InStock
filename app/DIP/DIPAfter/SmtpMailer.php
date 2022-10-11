<?php

namespace App\DIP\DIPAfter;

class SmtpMailer implements Mailer
{
    public function send()
    {
      return 'sending';
    }
}
