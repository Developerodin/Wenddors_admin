<?php
/**
 * File name: FaqFactory.php
 * Last modified: 2023.01.03 at 22:27:45
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\Faq;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Faq::class, function (Faker $faker) {
    return [
        'question' => $faker->text(100),
        'answer' => $faker->realText(),
        'faq_category_id' => $faker->numberBetween(1, 4)
    ];
});
