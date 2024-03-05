<?php
/*
 * File name: FavoritesTableSeeder.php
 * Last modified: 2023.03.02 at 14:35:34
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('favorites')->delete();
    }
}
