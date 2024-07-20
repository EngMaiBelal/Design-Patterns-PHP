<?php

namespace Creational\SimpleFactory;

class Car
{

    private $type;
    
    public function __construct($type)
    {
        $this->type = $type;
    }
}