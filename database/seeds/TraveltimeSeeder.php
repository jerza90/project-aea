<?php

use Illuminate\Database\Seeder;

class TraveltimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Traveltime::class,10)->create();
    }
}
