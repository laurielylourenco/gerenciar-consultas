<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dentista;
use Faker\Generator as Faker;

$factory->define(Dentista::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
