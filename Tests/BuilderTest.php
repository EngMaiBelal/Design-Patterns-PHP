<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\Builder\CarProducer;
use Creational\Builder\BMWCarBuilder;
use Creational\Builder\Models\BMWCar;
use Creational\Builder\BenzCarBuilder;
use Creational\Builder\Models\BenzCar;


class BuilderTest extends TestCase{
    public function testProduceBMWCar()
    {
        $BMWBuilder = new BMWCarBuilder();            // Define the car builder type implementation
        $carProducer =  new CarProducer($BMWBuilder); // Object from car producer and pass the type of builder car
        $myCar = $carProducer->produceCar();          // Call the producCar method

        $this->assertInstanceOf(BMWCar::class, $myCar); // test it 
    }
    public function testProduceBenzCar()
    {
        $BenzBuilder = new BenzCarBuilder();
        $carProducer =  new CarProducer($BenzBuilder);
        $myCar = $carProducer->produceCar();

        $this->assertInstanceOf(BenzCar::class, $myCar); 
    }
}
