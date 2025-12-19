<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_pulses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('b_front_left');
            $table->string('b_front_right');
            $table->string('b_back_left');
            $table->string('b_back_right');
            $table->string('s_front_left');
            $table->string('s_front_right');
            $table->string('s_back_left');
            $table->string('s_back_right');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_pulses');
    }
};
