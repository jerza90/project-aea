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
        $this->call(UsersTableSeeder::class);
        $this->call(TraveltimeSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderHistorySeeder::class);
        $this->call(VechileClientSeeder::class);
        $this->call(VechileInfoSeeder::class);
    }
}
