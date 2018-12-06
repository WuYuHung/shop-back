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
                'name' => '男鞋',
                'photo_path' => 'images/category/man.jpg',
                'is_deleted' => false
            ]);
            Category::create([
                'name' => '女鞋',
                'photo_path' => 'images/category/woman.jpg',
                'is_deleted' => false
            ]);
            Category::create([
                'name' => '男童',
                'photo_path' => 'images/category/boy.png',
                'is_deleted' => false
            ]);
            Category::create([
                'name' => '女童',
                'photo_path' => 'images/category/girl.jpg',
                'is_deleted' => false
            ]);
    }
}
