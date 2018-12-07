<?php

use Illuminate\Database\Seeder;

class UserCouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach (Range(1,21) as $number) {
            \App\UserCoupon::create(
                [
                    'user_id' => $number,
                    'coupon_id' => rand(1,20),
                    'is_used' => false
                ]
            );
        }

    }
}
