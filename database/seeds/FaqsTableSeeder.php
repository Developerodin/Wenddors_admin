<?php
/*
 * File name: FaqsTableSeeder.php
 * Last modified: 2023.03.01 at 21:56:10
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('faqs')->delete();
        factory(Faq::class, 30)->create();
    }
}
