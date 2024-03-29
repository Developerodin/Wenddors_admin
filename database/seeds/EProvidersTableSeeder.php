<?php
/*
 * File name: EProvidersTableSeeder.php
 * Last modified: 2023.03.02 at 11:28:53
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\EProvider;
use App\Models\EProviderUser;
use Illuminate\Database\Seeder;

class EProvidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('e_providers')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(EProvider::class, 18)->create();
        try {
            factory(EProviderUser::class, 10)->create();
        } catch (Exception $e) {
        }
        try {
            factory(EProviderUser::class, 10)->create();
        } catch (Exception $e) {
        }
        try {
            factory(EProviderUser::class, 10)->create();
        } catch (Exception $e) {
        }

    }
}
