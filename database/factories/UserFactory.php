<?php

use Faker\Generator as Faker;
use App\User;
use App\Model\Level;
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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),

    ];
});

$factory->define(App\Model\Level::class, function (Faker $faker) {
    return [
        'name_en' => $faker->name,
        'name_ar' => $faker->name,
        'order' => rand(1,100),


    ];
});