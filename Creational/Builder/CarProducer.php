<?php

namespace Builder;

use Builder\Models\Car;

class CarProducer{
    private $Builder;

    public function __construct( $builder ) {
        $this->Builder = $builder;
    }

    public function produceCar(): Car{
        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addDoors();
        $this->Builder->addEngine();
        $this->Builder->addWheels();
        $this->Builder->getCar();
    }
}
// this is the place that we will create