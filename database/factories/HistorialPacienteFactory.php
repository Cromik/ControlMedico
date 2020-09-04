<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HistorialPaciente;
use Faker\Generator as Faker;

$factory->define(HistorialPaciente::class, function (Faker $faker) {
    return [
        'descripcion' => $faker->sentence(5),
        'implemento' => $faker->sentence(5)
    ];
});
