<?php

use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
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
        foreach (Range(1,20) as $number) {
            \App\Coupon::create([
                'code' => $faker->password,
                'start_date' => date("2018/12/1"),
                'end_date' => date('2019/1/1'),
                'description' => '歡慶2019即將到來'
            ]);
        }
    }
}
