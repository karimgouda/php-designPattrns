<?php

namespace test;

use creational\AbstractFactory;
use creational\BenzCar;
use creational\BmwCar;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{

    public function testCreatBmwCar()
    {
        $carFactory = new AbstractFactory(30000);
        $myCar = $carFactory->createBmwCar();
        $this->assertInstanceOf(BmwCar::class , $myCar);
    }

    public function testCreateBenzCar()
    {
        $carFactory = new AbstractFactory(40000);
        $myCar = $carFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class , $myCar);
    }
    
}