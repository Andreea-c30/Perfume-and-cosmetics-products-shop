<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateIngredientProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_product', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('ingredient_id');            $table->foreign('product_id')
            ->references('id')
            ->on('product_details')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');            $table->foreign('ingredient_id')
            ->references('id')
            ->on('ingredients')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_product');
    }
}