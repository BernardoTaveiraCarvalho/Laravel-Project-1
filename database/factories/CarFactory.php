<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'color' => $faker -> colorName,
        'player_id'   => rand(1,10),
    ];
});
