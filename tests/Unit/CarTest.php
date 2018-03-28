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






}
