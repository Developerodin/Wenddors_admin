<?php
/*
 * File name: PaymentStatusFactory.php
 * Last modified: 2023.01.17 at 11:45:15
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */


use App\Models\PaymentStatus;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(PaymentStatus::class, function (Faker $faker) {
    return [
        'status' => $faker->text(48),
        'order' => $faker->numberBetween(1, 10)
    ];
});

$factory->state(PaymentStatus::class, 'status_more_127_char', function (Faker $faker) {
    return [
        'status' => $faker->paragraph(20),
    ];
});
