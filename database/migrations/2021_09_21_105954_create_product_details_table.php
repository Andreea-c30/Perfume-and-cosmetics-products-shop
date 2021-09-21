<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{


    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
                $table->id();
                $table->integer('volume')->unsigned();
                $table->string('flavor',255);
                $table->text('Directions_for_use')->nullable('false');
                $table->timestamps();  
                $table->foreign('id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');        });
    }    

    public function down()
    {
        Schema::dropIfExists('product_details');
    }
}