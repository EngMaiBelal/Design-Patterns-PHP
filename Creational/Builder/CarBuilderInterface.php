<?php

namespace Creational\Builder;

interface CarBuilderInterface{
    public function createCar();
    public function addBody();
    public function addDoors();
    public function addEngine();
    public function addWheels();
    public function getCar();
}