<?php
/*
 * File name: EProviderAddressesTableSeeder.php
 * Last modified: 2023.04.20 at 11:19:32
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\EProviderAddress;
use Illuminate\Database\Seeder;

class EProviderAddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('e_provider_addresses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        try {
            factory(EProviderAddress::class, 10)->create();
        } catch (Exception $e) {
        }
        try {
            factory(EProviderAddress::class, 10)->create();
        } catch (Exception $e) {
        }
        try {
            factory(EProviderAddress::class, 10)->create();
        } catch (Exception $e) {
        }
    }
}
