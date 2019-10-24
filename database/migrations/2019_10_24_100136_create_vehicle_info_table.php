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
            $table->increments('id')->unsigned();
            $table->string('vehicle_brand')->length(64)->nullable();
            $table->string('vehicle_model')->length(64)->nullable();
            $table->string('vehicle_cc')->nullable();
            $table->string('vehicle_battery_info')->nullable();
            $table->timestamps();

            // $table->foreign('vehicle_brand')->references('vehicle_brand')->on('client_vehicle');
            // $table->foreign('vehicle_model')->references('vehicle_model')->on('client_vehicle');
            // $table->foreign('vehicle_cc')->references('vehicle_cc')->on('client_vehicle');
            // $table->foreign('vehicle_battery_info')->references('vehicle_battery_info')->on('client_vehicle');
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
