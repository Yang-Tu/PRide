<?php

use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'fName' => $faker->name,
        'lName' => $faker->name,
        'class_year' => $faker->year($max = 'now'),
        'phone' => $faker->isbn10,
        'email' => $faker->safeEmail,
        'zipcode' => $faker->postcode,
        'airport' => "JFK",
        'd_date' => "Thur",
        'd_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'seats' => $faker->numberBetween($min = 0, $max = 4),
        'password' => $faker->md5
        'pref_service' => "rideshare"
        'eating_club' => "Cottage",
        'updated_at' => now(),
        'created_at' => now(),

    ];
});
