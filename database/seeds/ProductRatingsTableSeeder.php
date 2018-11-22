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
        foreach (Range(1,1000) as $number) {
            \App\ProductRating::create([
                'user_id' => rand(1,10),
                'product_id' => rand(1,20),
                'rating' => rand(1,10),
                'description' => '讚!',
                'created_at' => \Carbon\Carbon::now(),
                'is_buy' => true
            ]);
        }
    }
}
