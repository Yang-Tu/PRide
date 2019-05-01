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
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'fName' => $faker->firstName,
                'lName' => $faker->lastName,
                'Origin' => $faker->state,
                'Destination' => $faker->state,
                'Email' => $faker->email,
                'Pass' => bcrypt('secret'),

        ]);
    }
}
}
