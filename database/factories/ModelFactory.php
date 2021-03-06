<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\auto::class, function(Faker\Generator $faker){
	return [
		'fecha_llegada' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'chasis' => $faker->isbn13,
        'tipo_auto' => $faker->firstNameMale,
        'ultimo_servicio' => $faker->monthName($max = 'now'),
        'fecha_ultimo_servicio' => $faker->date($format = 'Y-m-d', $max = 'now')
	];
});