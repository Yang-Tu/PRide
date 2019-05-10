<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

$faker = Faker::create();
        foreach (range(1,5) as $index) {
            DB::table('users')->insert([
                'fName' => $faker->name,
                'lName' => $faker->name,
                'class_year' => $faker->year($max = 'now'),
                'phone' => $faker->isbn10,
                'email' => $faker->safeEmail,
                'zipcode' => $faker->postcode,
                'airport' => "LGA",
                'd_date' => "Thur",
                'd_time' => $faker->time($format = 'H:i:s', $max = 'now'),
                'seats' => $faker->numberBetween($min = 0, $max = 4),
                'password' => "password",
                'pref_service' => "rideshare",
                'eating_club' => "Ivy",
                'updated_at' => now(),
                'created_at' => now(),

        ]);
    }
}
}
