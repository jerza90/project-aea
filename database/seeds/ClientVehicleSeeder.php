<?php

use Illuminate\Database\Seeder;

class ClientVehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('client_vehicle')->insert(array(
            array(
               'vehicle_brand' => 'Alado',
               'vehicle_model' => 'A160',
               'vehicle_cc' => '',
               'vehicle_battery_info' => 'DIN55L',
               'vehicle_owner' => 1
            ),
            array(
                'vehicle_brand' => 'Alado',
                'vehicle_model' => 'QQ',
                'vehicle_cc' => '',
                'vehicle_battery_info' => 'DIN55L',
                'vehicle_owner' => 1
             ),
            array(
                'vehicle_brand' => 'Citroen',
                'vehicle_model' => 'Xantia 2.0i',
                'vehicle_cc' => '',
                'vehicle_battery_info' => 'DIN55L',
                'vehicle_owner' => 2
            ),
            array(
                'vehicle_brand' => 'Citroen',
                'vehicle_model' => 'XM 2.0i/3.0i/V6',
                'vehicle_cc' => '',
                'vehicle_battery_info' => 'DIN55L',
                'vehicle_owner' => 3
            ),
            array(
                'vehicle_brand' => 'KIA',
                'vehicle_model' => 'Cerato 2.0',
                'vehicle_cc' => '',
                'vehicle_battery_info' => 'DIN55L',
                'vehicle_owner' => 2
            ),
            array(
                'vehicle_brand' => 'KIA',
                'vehicle_model' => 'Cerato 1.6',
                'vehicle_cc' => '',
                'vehicle_battery_info' => 'DIN55L',
                'vehicle_owner' => 5
            )
          ));
    }
}
