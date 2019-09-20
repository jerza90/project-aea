<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {

    $countries = App\Country::pluck('id')->toArray();

    return [
        //
        'client_name'=>$faker->name,
        'client_hp'=>$faker->unique()->randomNumber(8),
        'client_email'=>$faker->unique()->safeEmail,
        'country_code'=>$faker->randomElement($countries)
    ];
});
