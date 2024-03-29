<?php
/*
 * File name: Updatev124Seeder.php
 * Last modified: 2023.11.15 at 22:30:16
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class Updatev124Seeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AppSettingsTableV124Seeder::class);
    }
}
