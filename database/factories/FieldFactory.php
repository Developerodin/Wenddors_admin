<?php
/**
 * File name: FieldFactory.php
 * Last modified: 2023.01.06 at 17:33:40
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\Field;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

global $i;
$i = 0;

/** @var Factory $factory */
$factory->define(Field::class, function (Faker $faker) use ($i) {
    $names = ['Grocery', 'Pharmacy', 'Restaurant', 'Store', 'Electronics', 'Furniture'];
    return [
        'name' => $names[$i++],
        'description' => $faker->sentences(5, true),
    ];
});
