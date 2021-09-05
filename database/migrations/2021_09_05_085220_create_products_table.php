<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_details_id')->unique();
            $table->string('name',255);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('brand_id');
            $table->decimal('price')->unsigned();
            $table->boolean('available');
            $table->timestamps();

            $table->foreign('product_details_id')
            ->references('id')
            ->on('product_details')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->foreign('type_id')
            ->references('id')
            ->on('types')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->foreign('brand_id')
            ->references('id')
            ->on('brands')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
