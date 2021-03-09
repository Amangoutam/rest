<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Factory;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('users')->insert([
            'uuid' => $faker->uuid,
            'name' => "Aman",
            'email'=> "test@gmail.com",
            'email_verified_at' => $faker->dateTime,
            'password' => bcrypt("test"),
            'phone_number' => "7896541230",
            'address' => "ABCD",
            'house_number' => 2,
            'city' => "Banka",
            'photo' => "/images/users/abu.png",
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
