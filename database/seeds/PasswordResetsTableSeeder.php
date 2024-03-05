<?php
/*
 * File name: PasswordResetsTableSeeder.php
 * Last modified: 2023.03.01 at 21:35:31
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_resets')->delete();
    }
}
