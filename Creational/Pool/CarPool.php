<?php

namespace Creational\Pool;

class CarPool{

    private $freeCars = [];
    private $busyCars = [];

    public function rentCar()
    {
        if( count($this->freeCars) == 0){ // The agance is empty
            $car = new Car();      // make new car 
        }else{
            $car = array_pop($this->freeCars); // take the last elements of array
        }

        $this->busyCars[spl_object_hash($car)] = $car; 

        return $car;
    }
    
    public function freeCar(Car $car)
    { // return the car to agance.
        $carId = spl_object_hash($car); // return the same hash id of a passed car.

        if( isset($carId)){
            unset($this->busyCars[$carId]);
            $this->freeCars[$carId] = $car;
        }

        return count($this->freeCars);
    }

    public function getReport(): int
    {
        return count($this->freeCars) + count($this->busyCars);
    }

    public function getCountRentCar(): int 
    {
        return count($this->busyCars);
    }

}