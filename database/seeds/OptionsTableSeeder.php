<?php
/*
 * File name: OptionsTableSeeder.php
 * Last modified: 2023.03.01 at 21:57:23
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->delete();
        factory(Option::class, 100)->create();
    }
}
