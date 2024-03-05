<?php
/**
 * File name: FavoriteFactory.php
 * Last modified: 2023.01.03 at 22:27:45
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\Favorite;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Favorite::class, function (Faker $faker) {
    return [
        'eservice_id' => $faker->numberBetween(1, 30),
        'user_id' => $faker->numberBetween(1, 6)
    ];
});
