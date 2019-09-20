<?php

use Faker\Generator as Faker;

$factory->define(App\Order_history::class, function (Faker $faker) {

    $orders = App\Order::pluck('id')->toArray();

    return [
        //
        'order_id'=>$faker->randomElement($orders),
        'order_info'=>$faker->text(),
        'order_operator'=>$faker->text(24)
    ];
});
