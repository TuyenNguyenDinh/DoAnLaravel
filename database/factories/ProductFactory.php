<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'category_id' =>$faker->numberBetween(1,2),
        'ten' => $faker->name,
        'anh' => $faker->imageUrl(),
        'gia_sp'=> $faker->numberBetween(1000, 10000000),
        'so_luong'=>$faker->numberBetween(1,100),
        'thong_tin_cu_the'=> "adfasdfasdfasdf",
    ];
});
