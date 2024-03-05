<?php
/*
 * File name: Updatev123Seeder.php
 * Last modified: 2023.10.24 at 21:38:47
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class Updatev123Seeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentMethodsTableV123Seeder::class);
        $this->call(AppSettingsTableV123Seeder::class);
        $this->call(PermissionsTableV123Seeder::class);
        $this->call(RoleHasPermissionsTableV123Seeder::class);
        $this->call(WalletsTableSeeder::class);
        $this->call(WalletTransactionsTableSeeder::class);
    }
}
