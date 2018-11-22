<?php

use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (Range(1,100) as $number) {
            foreach (Range(1,rand(2,10)) as $product) {
                \App\OrderProduct::create([
                    'order_id' => $number,
                    'product_id' => rand(1,20),
                    'quantity' => rand(1,10)
                ]);
            }
        }
    }
}
