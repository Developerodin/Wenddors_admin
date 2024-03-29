<?php
/*
 * File name: AppSettingsTableV124Seeder.php
 * Last modified: 2023.11.21 at 21:32:25
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class AppSettingsTableV124Seeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('app_settings')->insert(array(
            array(
                'key' => 'provider_app_name',
                'value' => 'Service Provider',
            ),
        ));
    }
}
