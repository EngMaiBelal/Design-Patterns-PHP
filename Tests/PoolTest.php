<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\Pool\CarPool;
use Creational\Pool\Car;

class PoolTest extends TestCase{

    private $carPool;

    protected function setUp(): void
    {
        parent::setUp();
        $this->carPool = new CarPool(); // هتشتغل مع كل تيس كاس عشان كده حطيتها هنا
    }

    public function testCanRentCase()
    {
        $myCar = $this->carPool->rentCar();
        $this->assertInstanceOf(Car::class, $myCar);
    }

    public function testCanFreeCase()
    {
        $myCar1 = $this->carPool->rentCar();          // اجرت الاولي
        $myCar2 = $this->carPool->rentCar();          // اجرت التانيه
        $freeCar1 = $this->carPool->freeCar($myCar1); // رجعت الاولي // 1 
        $freeCar2 = $this->carPool->freeCar($myCar2); // رجعت الاولي كده والتانيه// 2
        $this->assertEquals(1,  $freeCar1);
        $this->assertEquals(2,  $freeCar2);
    }

}