<?php

use Faker\Generator as Faker;

$factory->define(App\cars::class, function (Faker $faker) {
return [
            'make' => $faker->make,
           'model' => 'ford','honda', 'toyota',
           'year' => $faker->year()
       ];
});
