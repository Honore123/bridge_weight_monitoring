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
        Schema::create('bridge_data', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_type');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('humidity');
            $table->integer('car_weight');
            $table->dateTime('recorded_at');
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
        Schema::dropIfExists('bridge_data');
    }
};
