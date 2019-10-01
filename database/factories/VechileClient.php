<?php

use Faker\Generator as Faker;

$factory->define(App\Client_vechile::class, function (Faker $faker) {
    return [
        //
        'vehicle_brand' => $faker->name,
        'vechile_model' => str_random(10).$faker->numberBetween(1,3),
        'vechile_cc' => $faker->numberBetween(1,10),
        'vechile_battery_info' => $faker->name,
        'vechile_owner' => $faker->name
    ];
});
