<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerName');
            $table->string('Phone');
            $table->text('Address');
            $table->string('Date');
            $table->foreignId('shop_id');
            $table->foreignId('service_item_id');
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('service_item_id')->references('id')->on('service_items');
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
        Schema::dropIfExists('bookings');
    }
}
