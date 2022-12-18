<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigInteger('order_id') -> autoIncrement();
            $table->bigInteger('menu_id');
            $table->integer('qty');
            $table->bigInteger('reservation_id');

            $table->foreign('menu_id')->references('menu_id')->on('menus');
            $table->foreign('reservation_id')->references('reservation_id')->on('reservations');

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
};
