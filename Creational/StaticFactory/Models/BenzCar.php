<?php

namespace Creational\StaticFactory\Models;

class BenzCar implements Car{
    public function model(){
        return "Benz";
    }
}