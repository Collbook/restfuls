<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $users = [];

        $password = bcrypt('password');

        foreach (range(1, 100) as $index)
        {
            $timestamp = Carbon\Carbon::now();
            $users[] = [
                'email'         => $faker->email,
                'password'      => $password,
                'name'          => $faker->firstName . ' ' . $faker->lastName,
                'created_at'    => $timestamp,
                'updated_at'    => $timestamp
            ];
        }

        User::insert($users);
    }
}
