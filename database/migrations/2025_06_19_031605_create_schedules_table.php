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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_week')->comment('Day of the week for the course.')->max(10);
            $table->dateTime('time_slot')->comment('Time slot of the course.');
            $table->string('room')->comment('Room where the course is held.')->max(20);
            $table->integer('term')->comment('Term of the schedule.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
