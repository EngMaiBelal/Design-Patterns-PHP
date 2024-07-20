<?php

namespace Creational\Prototype;

class ManualCarPrototype extends AbstractCarPrototype
{
    protected $model = 'manual';
    
    public function __clone()
    {
        // some another logic
        return $this->model;
    }
}

