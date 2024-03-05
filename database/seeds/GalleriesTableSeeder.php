<?php
/*
 * File name: GalleriesTableSeeder.php
 * Last modified: 2023.03.01 at 21:23:22
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->delete();
        factory(Gallery::class, 20)->create();
    }
}
