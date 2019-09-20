<?php

use Faker\Generator as Faker;

$factory->define(App\Order::class, function (Faker $faker) {

    return [
        //
        'orders_id'=>$faker->numberBetween(10,200),
        'orders_code'=>$faker->unique()->text(10),
        'orders_item'=>$faker->text(24),
        'orders_description'=>$faker->text(100),
        'orders_status'=>$faker->numberBetween(0,1),
        'orders_location'=>str_random(50),
        'orders_operator'=>$faker->numberBetween(1,100),
        'orders_owner'=>$faker->numberBetween(1,100)
    ];
});
