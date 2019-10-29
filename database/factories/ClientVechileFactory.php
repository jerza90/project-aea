<?php

use Faker\Generator as Faker;

$factory->define(App\Client_vehicle::class, function (Faker $faker) {

    $vehicle_brand = App\Vehicle_info::pluck('vehicle_brand')->toArray();

    return [
        //
        'vehicle_brand' => $faker->randomElement($vehicle_brand),
    ];
});
