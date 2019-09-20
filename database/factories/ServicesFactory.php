<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {

    return [
        //
        'services_name'=>$faker->text(15),
        'services_code'=>$faker->unique()->randomNumber(5),
        'services_active'=>$faker->numberBetween(0,1)
    ];
});
