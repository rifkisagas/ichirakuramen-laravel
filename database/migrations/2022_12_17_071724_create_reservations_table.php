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
        Schema::create('reservations', function (Blueprint $table) {
            // $table->();
            $table->bigInteger('reservation_id') -> autoIncrement();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phonenumber');
            $table->date('datereservation') -> nullable();
            $table->string('timerange') -> nullable();
            $table->string('reservationnotes') -> nullable();
            $table->string('roomnumber') -> nullable();
            $table->string('reservation_type');
            $table->string('status');
            $table->timestamps();

            // $table->foreign('menu_id')->references('menu_id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
