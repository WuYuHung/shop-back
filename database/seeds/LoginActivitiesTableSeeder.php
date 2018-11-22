<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LoginActivitiesTableSeeder extends Seeder
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
            \App\LoginActivity::create([
                'user_id' => rand(1,10),
                'login_time' => Carbon::now()->addDays($number)
            ]);
        }
    }
}
