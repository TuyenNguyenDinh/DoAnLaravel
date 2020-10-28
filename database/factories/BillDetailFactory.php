<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\BillDetail::class, function (Faker $faker) {
    $bill_ID = App\Models\Bill::pluck('id')->toArray();
    $product_ID = App\Models\Product::pluck('id')->toArray();
    return [
        'bill_id' => $faker->randomElement($bill_ID),
        'product_id' =>$faker->randomElement($product_ID),
        'so_luong_mua' =>$faker->numberBetween(10,100),
        'don_gia' => 100000,
    ];
});
