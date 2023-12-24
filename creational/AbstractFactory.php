<?php

namespace creational;

class AbstractFactory
{
    private $tax = 1000;
    private $price;
    public function __construct($price)
    {
        $this->price;
    }

    public function createBmwCar()
    {
        return new BmwCar($this->price);
    }

    public function createBenzCar()
    {
        return new BenzCar($this->price , $this->tax);
    }

}