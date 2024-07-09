<?php

namespace Creational\Pool;

use DateTime;

class Car{

    private $rentAt;

    public function __construct()
    {
        $this->rentAt = new DateTime();
        return "create new car and rented it at ";
    }
}