<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\SimpleFactory\Car;
use Creational\SimpleFactory\CarFactory;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateCar()
    {
        $factory = new CarFactory();
        $BMWCar = $factory->createCar('BMW');
        $this->assertInstanceOf(Car::class, $BMWCar);
    }
}