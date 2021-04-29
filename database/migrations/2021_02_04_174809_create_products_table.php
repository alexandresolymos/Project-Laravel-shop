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
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('slugy')->unique();
            $table->string('slug')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->integer('price');
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('balise_alt')->nullable();
            $table->unsignedBigInteger('category_id')->index();
            $table->timestamps();
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
