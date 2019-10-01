<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVechileInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vechile_infos', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('vehicle_brand')->length(64)->nullable();
            $table->string('vechile_model')->length(64)->nullable();
            $table->string('vechile_cc')->nullable();
            $table->string('vehicle_battery_info')->nullable();
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
        Schema::dropIfExists('vechile_infos');
    }
}
