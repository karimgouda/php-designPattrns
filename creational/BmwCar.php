<?php

namespace creational;

class BmwCar implements CarsInterface
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function car()
    {
       return $this->price + 10000;
    }
}