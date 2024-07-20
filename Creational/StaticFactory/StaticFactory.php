<?php

namespace Creational\StaticFactory;

use Creational\StaticFactory\Models\BMWCar;
use Creational\StaticFactory\Models\BenzCar;

class StaticFactory
{
    public static function Factory(string $type)
    {
        if($type === 'BMW'){
            return new BMWCar();

        }elseif($type === 'Benz'){
            return new BenzCar();
        }else{
            return null;
        }
    }
}