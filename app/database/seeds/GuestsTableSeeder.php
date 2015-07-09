<?php

use Faker\Factory as Faker;

class GuestsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
//        $invites = Invite::all();
        $tables = Table::lists('id');

        $invites = [
            'walwood' => ["Rachel Walberg", "Amanda Underwood"],
            'evajack' => ["Jack Spencer", "Eva Cohen"],
            'cheetah' => ["Bobbi Tschida", "Mike Tschida"],
            'audrey2' => ["Anna Werner"],
            'albright' => ["Andrea Albright"],
            'willborn' => ["Emily Wilborn", "Abdallah Zihni"],
            'mer' => ["Mer Nechitilo"],
            'erin' => ["Erin Daugherty", "Dan Krasinski"],
            'johnsifth' => ["Alison Griffith","Matt Johnson"],
            'faireiver' => ["Andrew Fair","Emily Steiver"],
            'rolojones' => ["Austin Kennedy","Courtney Jones"],
            'freedom' => ["Azul Freedom"],
            'archerb' => ["Ben Archer"],
            'oakberg' => ["Britta Nordberg","Mason Oakes"],
            'millsberg' => ["Jaime Stomberg","Matt Mills"],
            'mortenxon' => ["Jesse Mortenson","Emma Y"],
            'hanson' => ["Kate Hanson","Erik Hanson"],
            'cohndis' => ["Kennon Landis","Tess Cohen"],
            'mj' => ["Mike Johnson","Nina Johnson"],
            'tmnt' => ["Mike Mayne","Sarah Mayne"],
            'nige' => ["Nigel Dunetts"],
            'vanni' => ["Nora Vanni"],
            'rharris' => ["Ryan Harris"],
            'scotty' => ["Scott McIntyre"],
            'srambo' => ["Scott Rambo"],
            'prambo' => ["Paul Rambo"],
            'beckstrom' => ["Selmira Beckstrom","Erik Beckstrom"],
            'cox' => ["Steph Cox"],
            'cooperth' => ["Ted Cooper"],
            'brianandsandie' => ["Brian Walther","Sandie Walther"],
            'westphall' => ["Cindy Westphall","Jim Westphall"],
            'drewandsherry' => ["Drew Walther","Sherry Walther"],
            'gloria' => ["Gloria MacRae"],
            'johnandshelly' => ["John Cheney","Shelly Cheney"],
            'lindaandrick' => ["Linda Walther","Rick Cheney"],
            'mary' => ["Mary White"],
            'grimes' => ["Robin Grimes","Mike Grimes"],
            'rosanne' => ["Rosanne Walther"],
            'scottandcarol' => ["Scott Cheney","Carol Staples"],
            'tom' => ["Tom Cheney"],
            'jimandginny' =>["Jim Tape","Ginny Tape"],
            'ben' => ["Ben Tape"],
            'crisandjim' => ["Cris Fishback","Jim Palmer"],
            'dave' => ["Dave Harris"],
            'kathyandleo' => ["Kathy Sova","Leo Sova"],
            'dunetts' => ["Mike Dunetts","Lavonne Dunetts"],
            'rebelsky' => ["Sam Rebelsky","Michelle Rebelsky"],
            'fish' => ["Teri Fisher"],
            'tomandelizabeth' => ["Tom Tape","Elizabeth Tape"],
            'walt' => ["Walter Tape"]
        ];

        foreach($invites as $name => $guests) {

            $invite = Invite::create([
                'name' => $name,
                'email' => $faker->email,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->word,
                'zip' => $faker->postcode,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'rsvp' => false
            ]);

            foreach($guests as $guest) {
                $guestNames = preg_split('/[\s,]+/', $guest);

                var_dump($guestNames);

                Guest::create([
                    'first_name' => $guestNames[0],
                    'last_name' => $guestNames[1],
                    'table_id' => $faker->randomElement($tables),
                    'invite_id' => $invite->id,
                    'created_at' => $faker->dateTime,
                    'updated_at' => $faker->dateTime,
                    'attending' => NULL
                ]);
            }


        }
    }

}