<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            Category::create([
                'name' => '男鞋'
            ]);
            Category::create([
                'name' => '女鞋'
            ]);
            Category::create([
                'name' => '男童'
            ]);
            Category::create([
                'name' => '女童'
            ]);
    }
}
