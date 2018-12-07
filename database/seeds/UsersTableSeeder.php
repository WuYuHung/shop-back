<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        \App\User::create([
            'name' => $faker->name,
            'address' => $faker->address,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => $faker->phoneNumber,
            'active' => true,
            'permission' => true,
            'birthdate' => $faker->date("1960-1-1","1999-12-31"),
            'photo_path' => 'images/user/TWK.jpeg',
            'is_vip' => true
        ]);
        foreach (Range(1,20) as $number) {
            \App\User::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'email' => "user".$number."@gmail.com",
                'password' => Hash::make("user".$number."pwd"),
                'phone' => $faker->phoneNumber,
                'active' => true,
                'permission' => false,
                'birthdate' => $faker->date("1960-1-1"),
                'photo_path' => 'images/user/TWK.jpeg',
                'is_vip' => true
            ]);
        }

    }
}
