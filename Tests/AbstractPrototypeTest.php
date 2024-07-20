<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\Prototype\AutomaticCarPrototype;
use Creational\Prototype\ManualCarPrototype;

class AbstractPrototypeTest extends TestCase
{   
    public function testCanCreateAutomaticCarWithClone()
    {
        $automaticPrototypeCar = new AutomaticCarPrototype;
        for($index = 1; $index <= 10; $index++){
            $newCar = clone $automaticPrototypeCar;
        }
        $this->assertInstanceOf(AutomaticCarPrototype::class, $newCar);
    }

    public function testCanCreateManualCarWithClone()
    {
        $manualPrototypeCar = new ManualCarPrototype;
        for($index = 1; $index <= 10; $index++){
            $newCar = clone $manualPrototypeCar;
        }
        $this->assertInstanceOf(ManualCarPrototype::class, $newCar);
    }
}
