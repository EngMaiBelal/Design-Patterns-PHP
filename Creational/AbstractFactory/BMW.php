<?php

namespace Creational\AbstractFactory;

class BMW implements CarInterface{
    private $price;
    public function __constract($price){
        $this->price = $price;
    }

    public function calculatePrice(){
        return $this->price + 200000;
    }
}
