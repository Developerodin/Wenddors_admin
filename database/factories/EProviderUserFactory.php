<?php
/*
 * File name: EProviderUserFactory.php
 * Last modified: 2023.02.01 at 22:38:55
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\EProvider;
use App\Models\EProviderUser;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(EProviderUser::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement([2, 4, 6]),
        'e_provider_id' => EProvider::all()->random()->id
    ];
});
