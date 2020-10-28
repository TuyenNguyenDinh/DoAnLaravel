<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Bill::class, function (Faker $faker) {
    $customer_ID = App\Models\Customer::pluck('id')->toArray();
    $user_id = App\User::pluck('id')->toArray();
    return [
        'customer_id' => $faker->randomElement($customer_ID),
        'ngaylap_hd' => $faker->date(),
        'noi_nhan_hang' => $faker->streetAddress,
        'tong_tien' => 1000000,
        'ghi_chu' => "day la note",
        'user_id' => $faker->randomElement($user_id),
    ];
});
