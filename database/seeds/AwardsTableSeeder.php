<?php
/*
 * File name: AwardsTableSeeder.php
 * Last modified: 2023.03.01 at 21:40:37
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\Award;
use Illuminate\Database\Seeder;

class AwardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('awards')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(Award::class, 50)->create();
    }
}
