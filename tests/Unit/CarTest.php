<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\car;

class CarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testExample()
    {
        $car = new Car();
        $car->make = 'mam llc';
        $car->model = 'honda';
        $car->year = '1964';
        $this->assertTrue($car->save());
    }

    public function testUpdate()
    {
        $car = new Car();
        $car->make = 'mam llc';
        $car->model = 'honda';
        $car->year = '2000';
        $this->assertTrue($car->save());


    }


    public function testDelete()
    {
        $car = new Car();
        $car->make = 'my car';
        $car->model = 'my model';
        $car->year = '1946';
        $car->save();
        $this->assertTrue($car->delete());


    }

    public function testCollectionCount()
    {
        $car = Car::All();
        $recordCount = $car->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);

    }
}