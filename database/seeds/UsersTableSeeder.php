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
            'password' => Hash::make('adminpwd'),
            'phone' => '0919'.rand(100000,999999),
            'active' => true,
            'permission' => true,
            'birthdate' => $faker->date("19".rand(70,99)."-".rand(1,12)."-".rand(1,28)),
            'photo_path' => '../images/user/default.png',
            'is_vip' => true
        ]);

        foreach (Range(1,20) as $number) {
            \App\User::create([
                'name' => $faker->name,
                'address' => $faker->address,
                'email' => "user".$number."@gmail.com",
                'password' => Hash::make("user".$number."pwd"),
                'phone' => '0919'.rand(100000,999999),
                'active' => true,
                'permission' => false,
                'birthdate' => $faker->date('19'.rand(70,99).'-'.rand(1,12).'-'.rand(1,28)),
                'photo_path' => '../images/user/default.png',
                'is_vip' => false
            ]);
        }

    }
}
