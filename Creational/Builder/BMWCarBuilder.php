<?php

namespace Builder;

use Builder\Models\Car;
use Builder\Models\BMWCar;
use Builder\CarBuilderInterface;

class BMWCarBuilder implements CarBuilderInterface{
    
    /**
     * type 
     *
     * @var Car
     */
    private $type;

    public function createCar(){
        $this->type = new BMWCar();
    }
    public function addBody(){
        $this->type->setParts('BMWBody','BMWBody');
    }
    public function addDoors(){
        $this->type->setParts('BMWDoors','BMWDoors');
    }
    public function addEngine(){
        $this->type->setParts('BMWEngine','BMWEngine');
    }
    public function addWheels(){
        $this->type->setParts('BMWWheels','BMWWheels');
    }
    public function getCar():Car{
        return $this->type;
    }
}