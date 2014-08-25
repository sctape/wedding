<?php

use Faker\Factory as Faker;

class TablesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Table::create([
                'name' => $faker->word,
            ]);
        }
    }

}