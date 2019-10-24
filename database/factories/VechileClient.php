<?php

use Faker\Generator as Faker;

$factory->define(App\Client_vehicle::class, function (Faker $faker) {
    return [
        //
        'vehicle_brand' => $faker->name,
        'vehicle_model' => str_random(10).$faker->numberBetween(1,3),
        'vehicle_cc' => $faker->numberBetween(1,10),
        'vehicle_battery_info' => $faker->name,
        'vehicle_owner' => $faker->name
    ];
});
