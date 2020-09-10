<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agendar;
use Faker\Generator as Faker;

$factory->define(Agendar::class, function (Faker $faker) {
    return [
        'paciente_id'=> $faker->randomDigit(),
        'comentario' => $faker->sentence(6,true),
        'fecha' =>$faker->date('d-m-y'),
        'hora' =>$faker->randomDigit(),
        'tratamientoid'=>$faker->randomDigit(),
        'precio'=>$faker->randomFloat(),
    ];
});
