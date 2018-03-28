<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
return [
            'make' => $faker-> company,
            'model' => $faker->randomElement($array = array ('ford','honda','toyota')),
             'year' => $faker->year()
       ];
});
