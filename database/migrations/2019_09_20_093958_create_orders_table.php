<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orders_id')->length(12);
            $table->string('orders_code')->unique()->length('12');
            $table->string('orders_item')->length(24);
            $table->text('orders_description');
            $table->integer('orders_status')->unsigned();
            $table->text('orders_location');
            $table->string('orders_operator')->length(24);
            $table->string('orders_owner')->length(24);
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
        Schema::dropIfExists('orders');
    }
}
