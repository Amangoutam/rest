<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Factory;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('foods')->insert([
            [
                'name' => "Veg Biryani",
                'score' => 5,
                'description' =>  "Tahu gejrot merupakan salah satu makanan khas Cirebon yang cukup digemari. Makanan ini berwujud tahu goreng yang disiram dengan kuah atau saus yang nikmat. Nah saus dan kuah ini lah yang membuat makanan berbahan dasar tahu ini punya cita rasa yang menggugah selera.",
                'price' => 70,
                'picture' => "/images/foods/tahu-gejrot.jpg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => "Chicken Biriyani",
                'score' => 15,
                'description' =>  "Martabak merupakan sajian yang biasa ditemukan di Arab Saudi, Yaman, Indonesia, Malaysia, Singapura, dan Brunei. Bergantung pada lokasinya, nama dan komposisi martabak dapat bervariasi.",
                'price' => 100,
                'picture' => "/images/foods/martabak.jpg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => "Meal",
                'score' => 5,
                'description' =>  "Nasi goreng adalah sebuah makanan berupa nasi yang digoreng dan diaduk dalam minyak goreng, margarin atau mentega, biasanya ditambah kecap manis, bawang merah, bawang putih, asam jawa, lada dan bumbu-bumbu lainnya, seperti telur, ayam, dan kerupuk.",
                'price' => 70,
                'picture' => "/images/foods/nasgor.jpg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => "Special Meal",
                'score' => 15,
                'description' =>  "Seblak adalah makanan Indonesia, umumnya adalah makanan khas dari Sunda, Jawa Barat yang bercita rasa gurih dan pedas yang terbuat dari kerupuk basah yang dimasak dengan sayuran dan sumber protein seperti telur, ayam, boga bahari atau olahan daging sapi, dimasak dengan bumbu tertentu.",
                'price' => 100,
                'picture' => "/images/foods/seblak.jpeg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => "Tea",
                'score' => 100,
                'description' =>  "Seblak adalah makanan Indonesia, umumnya adalah makanan khas dari Sunda, Jawa Barat yang bercita rasa gurih dan pedas yang terbuat dari kerupuk basah yang dimasak dengan sayuran dan sumber protein seperti telur, ayam, boga bahari atau olahan daging sapi, dimasak dengan bumbu tertentu.",
                'price' => 10,
                'picture' => "/images/foods/seblak.jpeg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
