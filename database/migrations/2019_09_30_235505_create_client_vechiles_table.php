<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientVechilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_vechiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vehicle_brand')->length(64);
            $table->string('vechile_model')->length(64);
            $table->string('vechile_cc')->length(64);
            $table->string('vechile_battery_info')->length(64);
            $table->string('vechile_owner')->length(64);
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
        Schema::dropIfExists('client_vechiles');
    }
}
