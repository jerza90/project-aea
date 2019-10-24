<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_brand')->length(64);
            $table->string('vehicle_model')->length(64);
            $table->string('vehicle_cc')->length(64);
            $table->string('vehicle_battery_info')->length(64);
            $table->string('vehicle_owner')->length(64);
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
        Schema::dropIfExists('client_vehicle');
    }
}
