<?php

use Illuminate\Database\Seeder;

class ProductRatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker  =  Faker\Factory::create('zh_TW');
        foreach (Range(1,10000) as $number) {
            \App\ProductRating::create([
                'user_id' => rand(1,21),
                'product_id' => rand(1,900),
                'rating' => rand(1,10),
                'description' => $faker->paragraph(3,true),
                'created_at' => \Carbon\Carbon::now(),
                'is_buy' => true
            ]);
        }
    }
}
