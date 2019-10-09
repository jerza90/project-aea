<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {

    $product_arr = ['Engine Oil','Tyres','Petrol','Battery','Belting','Timing Chain'];

    $owners = App\Client::pluck('id')->toArray();
    
    return [
        //
        'product_name'=> $product_arr[$faker->numberBetween(0,5)],
        'product_code'=>strtoupper(str_random(5)).$faker->numberBetween(2,10),
        'product_unit'=>$faker->numberBetween(5,20),
        'product_price_unit'=>$faker->randomNumber(5),
        'product_owner'=>$faker->randomElement($owners),
        'product_active'=>$faker->numberBetween(0,1)
    ];
});
