<?php

use Faker\Generator as Faker;

$factory->define(App\Vechile_info::class, function (Faker $faker) {
    return [
        //
        'vehicle_brand' => $faker->name,
        'vechile_model' => $faker->name,
        'vechile_cc' => $faker->name,
        'vehicle_battery_info' => $faker->name
    ];
});
