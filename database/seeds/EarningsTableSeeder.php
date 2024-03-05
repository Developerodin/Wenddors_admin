<?php
/*
 * File name: EarningsTableSeeder.php
 * Last modified: 2023.03.01 at 21:22:30
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class EarningsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('earnings')->delete();
    }
}
