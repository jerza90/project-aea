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
            $table->string('vehicle_brand')->index('vehicle_brand')->length(64)->nullable();
            $table->string('vehicle_model')->index('vehicle_model')->length(64)->nullable();
            $table->string('vehicle_cc')->index('vehicle_cc')->length(64)->nullable();
            $table->string('vehicle_battery_info')->index('vehicle_battery_info')->length(64);
            $table->integer('vehicle_owner')->index('vehicle_owner')->nullable()->unsigned();
            $table->string('vehicle_image')->nullable();
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
