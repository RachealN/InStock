<?php

namespace App\OOP\Abstract;

abstract class Employee
{
    public abstract function getCompanyName();
    public abstract function department();
}


class Manager extends Employee{
    public function getCompanyName(){
        echo "Manager works at Amazon";
    }
    public function department(){
        echo "Engineering";
    }
}

class Supervisor extends Employee{
    public function getCompanyName(){
        echo "Microsoft";
    }
    public function department(){
        echo "Marketing";
    }

}

$manager = new Manager();
$supervisor = new Supervisor();

$manager->getCompanyName();
$supervisor->department();
