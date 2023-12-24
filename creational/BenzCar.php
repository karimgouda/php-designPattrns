<?php

namespace creational;

class BenzCar implements CarsInterface
{

    private $price;
    private $tax;

    public function __construct($price , $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function car()
    {
        return $this->price+$this->tax+1000;
    }
}