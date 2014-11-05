<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        User::create(['username' => 'admin', 'password' => 'secret']);
    }

}