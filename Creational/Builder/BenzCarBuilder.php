<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;
use Creational\Builder\Models\BenzCar;
use Creational\Builder\CarBuilderInterface;

class BenzCarBuilder implements CarBuilderInterface{

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
    public function getCar() :Car{
        return $this->type;
    }
}