<?php
/*
 * File name: AvailabilityHoursTableSeeder.php
 * Last modified: 2023.02.01 at 22:22:23
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\AvailabilityHour;
use Illuminate\Database\Seeder;

class AvailabilityHoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('availability_hours')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(AvailabilityHour::class, 50)->create();
    }
}
