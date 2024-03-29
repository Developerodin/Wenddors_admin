<?php
/*
 * File name: AddressesTableSeeder.php
 * Last modified: 2023.02.01 at 21:46:26
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('addresses')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(Address::class, 20)->create();

    }
}
