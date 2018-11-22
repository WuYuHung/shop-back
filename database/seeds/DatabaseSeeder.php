<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(SubscribesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderProductsTableSeeder::class);
        $this->call(UserCouponsTableSeeder::class);
        $this->call(WishlistsTableSeeder::class);
        $this->call(ProductRatingsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(LoginActivitiesTableSeeder::class);
    }
}
