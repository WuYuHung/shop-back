<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (Range(1,4) as $number) {
            foreach (Range(1,5) as $product) {
                \App\Product::create([
                    'name' => '鞋子'.(5*($number-1) + $product),
                    'category_id' => $number,
                    'price' => rand( 10,150)*100,
                    'description' => '非常美麗的鞋子',
                    'photo_path' => ' '
                ]);
            }
        }
    }
}
