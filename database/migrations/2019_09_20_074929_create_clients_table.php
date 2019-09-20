<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('client_name');
            $table->string('client_hp');
            $table->string('client_email')->unique()->safeEmail;
            $table->integer('country_code')->unsigned();
            $table->timestamps();
        });

        Schema::table('clients',function(Blueprint $table){
            $table->foreign('country_code')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
