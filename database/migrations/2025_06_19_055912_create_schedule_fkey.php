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
        Schema::table('schedules', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id')->comment('ID of the course');
            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade')
                ->comment('Foreign key referencing courses table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign(['course_id']); // Drop foreign key first
            $table->dropColumn('course_id');   // Then drop the column
        });
    }
};
