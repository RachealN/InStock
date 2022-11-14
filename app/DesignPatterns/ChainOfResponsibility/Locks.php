<?php

namespace App\DesignPatterns\ChainOfResponsibility;

use Exception;

class Locks implements HomeChecker
{
   public function check(HomeStatus $home)
   {
       if (!$home->locked) {
           throw new Exception('The doors are not locked! Abort it!');
       }

       $this->next($home);
   }
}
