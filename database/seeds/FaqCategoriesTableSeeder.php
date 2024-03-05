<?php
/*
 * File name: FaqCategoriesTableSeeder.php
 * Last modified: 2023.03.01 at 21:56:10
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use App\Models\FaqCategory;
use Illuminate\Database\Seeder;

class FaqCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq_categories')->delete();
        factory(FaqCategory::class, 5)->create();
    }
}
