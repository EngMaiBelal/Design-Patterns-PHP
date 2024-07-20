<?php

namespace Creational\StaticFactory\Models;

class BMWCar implements Car{
    public function model(){
        return "BMW";
    }
}