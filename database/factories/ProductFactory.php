<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {

    $owners = App\Client::pluck('id')->toArray();

    return [
        //
        'product_name'=>strtoupper($faker->text(15)),
        'product_code'=>str_random(5),
        'product_unit'=>$faker->numberBetween(5,20),
        'product_price_unit'=>$faker->randomNumber(5),
        'product_owner'=>$faker->randomElement($owners),
        'product_active'=>$faker->numberBetween(0,1)
    ];
});
