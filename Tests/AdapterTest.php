<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase{

    public function testCanStartNormalEngine(){
        $engine = new NormalEngine();
        $car = new Car($engine);
        $this->assertEquals("Normal Engine Start", $car->start());
    }

    public function testCanStartTurboEngine(){
        $engine = new TurboEngine();
        $adapter = new EngineAdapter($engine);
        $car = new Car($adapter);
        $this->assertEquals("Turbo Engine Start", $car->start());
    }
}