<?php

namespace Creational\AbstractFactory;

class CarAbstractFactory{
    private $price;
    private $tax = 2000;

    public function __construct($price){
        $this->price = $price;
    }
    
    public function createBMWCar(): BMW{
        return new BMW($this->price);
    }

    public function createBenzCar(): Benz{
        return new Benz($this->price, $this->tax);
    }
}
