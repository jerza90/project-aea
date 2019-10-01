<?php

use Illuminate\Database\Seeder;

class VechileClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Client_vechile::class,10)->create();
    }
}
