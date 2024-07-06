<?php

namespace Creational\Builder\Models;

class Car{
    private $data = [];

    public function setParts($name, $value){
        $this->data[$name] = $value;
    }
}