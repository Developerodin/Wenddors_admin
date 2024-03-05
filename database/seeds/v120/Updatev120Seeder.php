<?php
/*
 * File name: Updatev120Seeder.php
 * Last modified: 2023.07.31 at 14:00:15
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class Updatev120Seeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentMethodsTableV120Seeder::class);
        $this->call(AppSettingsTableV120Seeder::class);
    }
}
