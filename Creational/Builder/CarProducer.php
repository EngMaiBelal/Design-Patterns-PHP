<?php

namespace Creational\Builder;

use Creational\Builder\Models\Car;

class CarProducer{
    private $Builder;

    public function __construct($builder) 
    {
        $this->Builder = $builder;
    }

    public function produceCar(): Car
    {
        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addDoors();
        $this->Builder->addEngine();
        $this->Builder->addWheels();
        return $this->Builder->getCar();
    }
}
