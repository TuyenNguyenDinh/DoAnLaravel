<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    return [
        'ten' => $faker->name,
        'sdt' => $faker->phoneNumber,
        'dia_chi'=> $faker->address,
        'mail' => $faker->email,
    ];
});
