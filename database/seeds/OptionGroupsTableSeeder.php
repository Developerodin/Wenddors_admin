<?php
/*
 * File name: OptionGroupsTableSeeder.php
 * Last modified: 2023.03.02 at 14:35:42
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Seeder;

class OptionGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('option_groups')->delete();

        DB::table('option_groups')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Size',
                    'allow_multiple' => 1,
                    'created_at' => '2021-01-22 19:49:15',
                    'updated_at' => '2021-02-07 20:30:19',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Area',
                    'allow_multiple' => 1,
                    'created_at' => '2021-01-22 20:46:28',
                    'updated_at' => '2021-01-22 20:46:28',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Surface',
                    'allow_multiple' => 0,
                    'created_at' => '2021-01-22 20:46:47',
                    'updated_at' => '2021-01-22 20:46:47',
                ),
        ));


    }
}
