<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InvitesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 50) as $index)
        {
            Invite::create([
                'name' => $faker->lastName . $index,
                'email' => $faker->email,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->word,
                'zip' => $faker->postcode,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
            ]);
        }
    }

}