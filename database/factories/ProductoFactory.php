<?php

use App\Producto;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'codigoproducto' => $faker->randomNumber($nbDigits=8, $strict=true),
        'gtin' => $faker->randomNumber($nbDigits=9, $strict=true),
        'nombregenerico' => $faker->sentence($nbWords=6, $variableNbWords=true),
        'presentacion' => $faker->word,
        'nombrecomercial' => $faker->word,
        'numerocertificado' => $faker->randomNumber($nbDigits=7, $strict=true),
        'laboratorio' => $faker->word,
        'formafarmaceutica' => $faker->word,
        'viaadministracion' => $faker->word,
        'condicionexpendio' => $faker->word,
        'glnproveedor' => $faker->randomNumber($nbDigits=6, $strict=true),
        'tipoproducto' => $faker->randomElement(['1', '2']),
        'numerotroquel' => $faker->randomNumber($nbDigits=8, $strict=true),
        'trazable' => $faker->boolean($chanceOfGettingTrue=50),


    ];
});
