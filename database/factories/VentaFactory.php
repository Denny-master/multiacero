<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Venta;
use Faker\Generator as Faker;

$factory->define(Venta::class, function (Faker $faker) {
    return [

      'nombre'=>$faker->randomElement(['Martillo','Alicate','Destornillador']),
      'cantidad'=>$faker->randomDigit(200),
      'estado'=>$faker->randomElement([true,false])
    ];
});
