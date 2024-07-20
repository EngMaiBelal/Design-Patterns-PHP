<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\StaticFactory\StaticFactory;
use Creational\StaticFactory\Models\BMWCar;
use Creational\StaticFactory\Models\BenzCar;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $this->assertInstanceOf(BMWCar::class, StaticFactory::Factory('BMW'));
    }
    public function testCanCreateBenzCar()
    {
        $this->assertInstanceOf(BenzCar::class, StaticFactory::Factory('Benz'));
    }
}
