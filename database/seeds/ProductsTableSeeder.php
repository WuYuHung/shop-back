<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

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
        $json = File::get("database/data/shoes_data.json");
        $data= json_decode($json);
        $c = ['man','woman','boy','girl'];
        foreach ($data as $obj) {
            \App\Product::create([
                'name' => $obj->name,
                'category_id' => $obj->category_id,
                'price' => $obj->price,
                'description' => $obj->description,
                'photo_path' => 'images/shop/'.$c[$obj->category_id-1]."_".rand(1,5).".png",
                'is_deleted' => false,
                'created_at' => Carbon::now()->subMonth(12),
                'updated_at' => Carbon::now()->subMonth(12)
            ]);
        }
    }
}
