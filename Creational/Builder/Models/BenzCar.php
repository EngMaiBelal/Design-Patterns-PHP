<?php

namespace Builder\Models;

class BenzCar extends Car{
   
    private $data = [];

    public function setParts($name, $value){
        $this->data[$name] = $value;
    }
}