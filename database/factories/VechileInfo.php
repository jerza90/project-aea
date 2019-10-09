<?php

use Faker\Generator as Faker;

$factory->define(App\Vechile_info::class, function (Faker $faker) {

    $rand_brand = ['Mercedez','Toyota','Honda','Mazda','Proton','Produa'];

    return [
        //
        'vehicle_brand' => $rand_brand[$faker->numberBetween(0,1)],
        'vechile_model' => $faker->name,
        'vechile_cc' => $faker->name,
        'vehicle_battery_info' => $faker->name
    ];
});
