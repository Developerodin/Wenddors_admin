<?php
/*
 * File name: 2021_07_23_110636_create_json_extract_function.php
 * Last modified: 2023.07.23 at 15:29:47
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

use Illuminate\Database\Migrations\Migration;

class CreateJsonExtractFunction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            DB::unprepared('
        CREATE FUNCTION `json_extract`(
        details TEXT,
        required_field VARCHAR (255)
        ) RETURNS TEXT CHARSET latin1
        BEGIN
        SET details = SUBSTRING_INDEX(details, "{", -1);
        SET details = SUBSTRING_INDEX(details, "}", 1);
        RETURN TRIM(
            BOTH \'"\' FROM SUBSTRING_INDEX(
                SUBSTRING_INDEX(
                    SUBSTRING_INDEX(
                        details,
                        CONCAT(
                            \'"\',
                            SUBSTRING_INDEX(required_field,\'$.\', -1),
                            \'":\'
                        ),
                        -1
                    ),
                    \',"\',
                    1
                ),
                \':\',
                -1
            )
        ) ;
        END
        ');
        } catch (Exception $e) {
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}