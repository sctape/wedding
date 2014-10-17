<?php

use Faker\Factory as Faker;

class GuestsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $invites = Invite::all();
        $tables = Table::lists('id');

        foreach(range(1, 50) as $index)
        {
            $invite = $invites->random();
            Guest::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'table_id' => $faker->randomElement($tables),
                'invite_id' => $invite->id,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'attending' => $invite->rsvp ? $faker->boolean() : NULL,
            ]);
        }
    }

}