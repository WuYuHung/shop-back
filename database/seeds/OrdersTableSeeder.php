<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
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
        foreach (Range(1,100) as $number) {
                \App\Order::create([
                    'user_id' => rand(1,10),
                    'coupon_id' => null,
                    'amount' => rand(10000,300000),
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'company_name' => 'G2',
                    'address' => $faker->address,
                    'email' => $faker->email,
                    'phone' => $faker->phoneNumber,
                    'status' => 'pay'
                ]);
        }
    }
}
