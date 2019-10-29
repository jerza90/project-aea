<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_brand')->index('vehicle_brand')->length(64)->nullable();
            $table->string('vehicle_model')->index('vehicle_model')->length(64)->nullable();
            $table->string('vehicle_cc')->index('vehicle_cc')->nullable();
            $table->string('vehicle_battery_info')->index('vehicle_battery_info')->nullable();
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
        Schema::dropIfExists('vehicle_info');
    }
}
