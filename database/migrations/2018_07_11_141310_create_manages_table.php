<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('season_name');
            $table->string('production_area');
            $table->string('process');
            $table->string('season_manager');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('planting_date');
            $table->string('harvest_date');
            $table->string('product_name');
            $table->string('product_image');
            $table->string('description');
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
        Schema::dropIfExists('manages');
    }
}
