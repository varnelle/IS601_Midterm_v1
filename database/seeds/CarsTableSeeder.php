<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\car::class, 50)->create()->each(function ($u) {
            //  $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}