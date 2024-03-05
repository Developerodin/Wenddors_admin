<?php
/*
 * File name: EServiceCategoyFactory.php
 * Last modified: 2023.03.02 at 14:35:34
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\Category;
use App\Models\EProvider;
use App\Models\EServiceCategory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(EServiceCategory::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'e_service_id' => EProvider::all()->random()->id
    ];
});
