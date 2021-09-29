<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
               $table->id();
            $table->string('name',255);
            $table->string('image',255)->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->decimal('price')->unsigned();
            $table->boolean('available');
            $table->timestamps();           
             $table->foreign('type_id')
            ->references('id')
            ->on('types')
            ->onDelete('set null');           
             $table->foreign('brand_id')
            ->references('id')
            ->on('brands')
            ->onDelete('set null');
        });
    }   
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
