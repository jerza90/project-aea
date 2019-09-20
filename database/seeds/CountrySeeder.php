<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         //
         $admin = \App\Country::create([
           'country_name'     => 'Malaysia',
           'country_active'    => 1,
           'country_code' => strtoupper(str_random(5))
         ]);

         $admin = \App\Country::create([
           'country_name'     => 'Indonesia',
           'country_active'    => 1,
           'country_code' => strtoupper(str_random(5))
         ]);

         $admin = \App\Country::create([
           'country_name'     => 'Singapore',
           'country_active'    => 0,
           'country_code' => strtoupper(str_random(5))
         ]);
     }
}
