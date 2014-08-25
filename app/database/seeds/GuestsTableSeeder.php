<?php

use Faker\Factory as Faker;

class GuestsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $tables = Table::lists('id');

        foreach(range(1, 50) as $index)
        {
            Guest::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->word,
                'zip' => $faker->postcode,
                'table_id' => $faker->randomElement($tables),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }

}