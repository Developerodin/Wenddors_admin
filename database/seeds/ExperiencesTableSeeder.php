<?php
/*
 * File name: ExperiencesTableSeeder.php
 * Last modified: 2023.03.01 at 21:41:25
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('experiences')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        factory(Experience::class, 50)->create();
    }
}
