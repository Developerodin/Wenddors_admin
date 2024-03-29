<?php
/**
 * File name: DeliveryAddressFactory.php
 * Last modified: 2023.01.06 at 17:33:40
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\DeliveryAddress;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(DeliveryAddress::class, function (Faker $faker) {
    return [
        "description" => $faker->sentence,
        "address" => $faker->address,
        "latitude" => $faker->latitude,
        "longitude" => $faker->longitude,
        "is_default" => $faker->boolean,
        "user_id" => $faker->numberBetween(1, 6),
    ];
});
