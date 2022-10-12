<?php

namespace App\OOP\Inheritence\MultilevelInheritence;


class Car{
    public function color(){
        echo "white";
    }

    public function type(){
        echo "Toyota";
    }
}

class CarDealers extends Car{
    public function germanyNewCarDealers(){
        echo "This is a brand new car shipped from Germany";
    }

    public function JapanUsedCarDealers(){
        echo "Japan used cars";
    }
}

Class CarBrand extends CarDealers{
    public function favoriteBrand(){
        echo "Tesla";
    }

    public function myCar(){
        $this->color();
        $this->type();
        $this->germanyNewCarDealers();
        $this->favoriteBrand();
    }
}

$car_data = new CarBrand();
$car_data->myCar();
