<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('
        CREATE TABLE countries(
            `id` BIGINT(12) UNSIGNED AUTO_INCREMENT,
            `name` VARCHAR(255),
            PRIMARY KEY(`id`)
            )ENGINE=INNODB;
        ');
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('
        DROP TABLE countries; 
        ');
        
    }
}
