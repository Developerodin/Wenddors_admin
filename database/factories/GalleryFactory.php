<?php
/*
 * File name: GalleryFactory.php
 * Last modified: 2023.03.01 at 21:22:30
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\EProvider;
use App\Models\Gallery;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Gallery::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence,
        'e_provider_id' => EProvider::all()->random()->id
    ];
});
