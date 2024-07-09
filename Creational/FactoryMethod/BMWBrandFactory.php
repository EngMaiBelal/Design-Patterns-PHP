<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\BMWBrand;

class BMWBrandFactory implements BrandFactory{

    public function buildBrand()
    {
        return new BMWBrand;
    } 
}
