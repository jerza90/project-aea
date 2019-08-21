<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Traveltime::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->name,
        'country'=>$faker->numberBetween(1,10),
        'short_desc'=>$faker->text,
        'traveldate'=>$faker->dateTime()->format('Y-m-d H:i:s')
    ];
});
