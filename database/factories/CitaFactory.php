<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cita;
use Faker\Generator as Faker;

$factory->define(Cita::class, function (Faker $faker) {
    return [
        'pacienteid' => $faker->randomDigit,
        'descripcion' => $faker->sentence(6,true),
    ];
});
