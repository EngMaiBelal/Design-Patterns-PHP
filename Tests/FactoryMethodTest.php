<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\FactoryMethod\BMWBrand;
use Creational\FactoryMethod\BenzBrand;
use Creational\FactoryMethod\BMWBrandFactory;
use Creational\FactoryMethod\BenzBrandFactory;

class FactoryMethodTest extends TestCase{

    public function testCanBuildBmwBrand()
    {
        $brandFactory = new BMWBrandFactory;
        $myBrand = $brandFactory->buildBrand();
        $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }

    public function testCanBuildBenzBrand()
    {
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->buildBrand();
        $this->assertInstanceOf(BenzBrand::class, $myBrand);
    }
}