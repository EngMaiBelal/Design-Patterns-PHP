<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\CarAbstractFactory;
use Creational\AbstractFactory\Benz;
use Creational\AbstractFactory\BMW;

class AbstractFactoryTest extends TestCase{

    public function testCanCreateBMW()
    {
        $carFactory = new CarAbstractFactory(20000);
        $bmwCar = $carFactory->createBMWCar();
        $this->assertInstanceOf(BMW::class, $bmwCar);
    }

    public function testCanCreateBenz()
    {
        $carFactory = new CarAbstractFactory(20000);
        $benzCar = $carFactory->createBenzCar();
        $this->assertInstanceOf(Benz::class, $benzCar);
    }
}
// Testing Command
// vendor/bin/phpunit tests/AbstractFactoryTest.php