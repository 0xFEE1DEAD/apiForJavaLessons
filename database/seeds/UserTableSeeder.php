<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'phoneNumber' => $faker->phoneNumber
            ]);
        }
    }
}
