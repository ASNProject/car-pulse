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
        Schema::table('car_pulses', function (Blueprint $table) {
            $table->string('bat_front_left')->nullable()->after('s_back_right');
            $table->string('bat_front_right')->nullable()->after('bat_front_left');
            $table->string('bat_back_left')->nullable()->after('bat_front_right');
            $table->string('bat_back_right')->nullable()->after('bat_back_left');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('car_pulses', function (Blueprint $table) {
            $table->dropColumn('bat_front_left');
            $table->dropColumn('bat_front_right');
            $table->dropColumn('bat_back_left');
            $table->dropColumn('bat_back_right');
        });
    }
};
