<?php

namespace Creational\FactoryMethod;

use Creational\FactoryMethod\BenzBrand;

class BenzBrandFactory implements BrandFactory{

    public function buildBrand()
    {
        return new BenzBrand;
    }
}
