<?php 
namespace Creational\Adapter;

class EngineAdapter implements EngineAdapter{
    private $engine;
    public function __construct(TurboEngine $engine){
        $this->engine = $engine;
    }
    
    public function startEngine(){
        return $this->engine->startTurbo();
    }
}