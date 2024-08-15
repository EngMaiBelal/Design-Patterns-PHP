<?php 
namespace Creational\Adapter;

class Car{
    private $engine;
    public function __construct(EngineInterface $engine){
        $this->engine = $engine;
    }
    public function start(){
        return $this->engine->startEngine();
    }
}