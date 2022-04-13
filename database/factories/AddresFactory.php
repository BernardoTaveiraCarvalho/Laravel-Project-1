<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Addres;
use Faker\Generator as Faker;

$factory->define(Addres::class, function (Faker $faker) {
    return [
        'address'  => $faker->address,
        'city' => $faker->city,
        'country_id'   => rand(1,10),
        'postal_code'=> $faker->postcode,
    ];
});
