<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pets;
use Faker\Generator as Faker;

$factory->define(Pets::class, function (Faker $faker) {

    return [
        'name'       => $faker->name,
        'birthdate'   => $faker->date(),
        'color'=> $faker->colorName,
        'people_id'     => rand(1, 10)
    ];
});
