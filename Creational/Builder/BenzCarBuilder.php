<?php

namespace Builder;

use Builder\Models\Car;
use Builder\Models\BenzCar;
use Builder\CarBuilderInterface;

class BenzCarBuilder implements CarBuilderInterface{
    
    /**
     * type 
     *
     * @var Car
     */
    private $type;

    public function createCar(){
        $this->type = new BenzCar();
    }
    public function addBody(){
        $this->type->setParts('BenzBody','BenzBody');
    }
    public function addDoors(){
        $this->type->setParts('BenzDoors','BenzDoors');
    }
    public function addEngine(){
        $this->type->setParts('BenzEngine','BenzEngine');
    }
    public function addWheels(){
        $this->type->setParts('BenzWheels','BenzWheels');
    }
    public function getCar():Car{
        return $this->type;
    }
}