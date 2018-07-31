<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('farm_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('season_name');
            $table->string('production_area');
            $table->string('process');
            $table->string('season_manager');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('planting_date');
            $table->string('harvest_date');
            $table->string('product_image');
            $table->string('description');
            $table->foreign('farm_id')->references('id')->on('farms')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
