<?php

namespace Creational\Prototype;

class AutomaticCarPrototype extends AbstractCarPrototype
{
    protected $model = 'automatic';
    
    public function __clone()
    {
        // some another logic
        return $this->model;
    }
}