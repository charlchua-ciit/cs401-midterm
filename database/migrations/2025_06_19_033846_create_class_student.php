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
        Schema::create('class_student', function (Blueprint $table) {
            $table->unsignedBigInteger('course_id')->comment('ID of the course');
            $table->unsignedBigInteger('student_id')->comment('ID of the student');
            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade')
                ->comment('Foreign key referencing courses table');
            $table->foreign('student_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->comment('Foreign key referencing users table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_student');
    }
};
