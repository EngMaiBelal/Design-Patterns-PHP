<?php

namespace Builder\Models;

class BMWCar extends Car{

    private $data = [];

    public function setParts($name, $value){
        $this->data[$name] = $value;
    }
}