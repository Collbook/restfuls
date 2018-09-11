<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Listing;
class ListingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $listing = [];


        foreach (range(1, 100) as $index)
        {
            $timestamp = Carbon\Carbon::now();
            $listing[] = [
                'name'          => $faker->name,
                'address'       => $faker->address,
                'website'       => $faker->company,
                'email'         => $faker->email,
                'phone'         => $faker->phoneNumber,
                'bio'           => $faker->text,
                'user_id'       => $faker->numberBetween($min = 1, $max = 100),
                'created_at'    => $timestamp,
                'updated_at'    => $timestamp
            ];
        }

        Listing::insert($listing);
    }
}
