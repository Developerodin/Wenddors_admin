<?php
/*
 * File name: Updatev200Seeder.php
 * Last modified: 2022.04.02 at 07:26:36
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2022
 */

use Illuminate\Database\Seeder;

class Updatev200Seeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableV200Seeder::class);
    }
}
