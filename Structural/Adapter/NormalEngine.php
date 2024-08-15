<?php 
namespace Creational\Adapter;

class NormalEngine implements EngineInterface{

    public function startEngine(){
        return "Normal Engine";
    }
}