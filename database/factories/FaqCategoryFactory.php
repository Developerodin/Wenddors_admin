<?php /*
 * File name: FaqCategoryFactory.php
 * Last modified: 2023.01.11 at 22:36:57
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

/** @noinspection PhpUnusedLocalVariableInspection */

use App\Models\FaqCategory;
use Illuminate\Database\Eloquent\Factory;

global $i;
$i = 0;

/** @var Factory $factory */
$factory->define(FaqCategory::class, function () use ($i) {
    $names = ['Service', 'Payment', 'Support', 'Providers', 'Misc'];
    return [
        'name' => $names[$i++],
    ];
});
