<?php
/*
 * File name: Updatev121Seeder.php
 * Last modified: 2023.08.10 at 18:03:35
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class Updatev121Seeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentMethodsTableV121Seeder::class);
        $this->call(PermissionsTableV121Seeder::class);
        $this->call(RoleHasPermissionsTableV121Seeder::class);
        $this->call(WalletsTableSeeder::class);
        $this->call(WalletTransactionsTableSeeder::class);
    }
}
