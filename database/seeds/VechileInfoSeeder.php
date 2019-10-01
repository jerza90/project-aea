<?php

use Illuminate\Database\Seeder;

class VechileInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Vechile_info::class,10)->create();
    }
}
