<?php
/*
 * File name: UploadsTableSeeder.php
 * Last modified: 2023.03.01 at 21:37:55
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class UploadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('uploads')->delete();
    }
}
