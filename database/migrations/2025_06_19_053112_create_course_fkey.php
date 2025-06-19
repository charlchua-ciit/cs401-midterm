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
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('teacher_id')->comment('ID of the teacher');
            $table->foreign('teacher_id')
                ->references('id')->on('teachers')
                ->onDelete('cascade')
                ->comment('Foreign key referencing teachers table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']); // Drop foreign key first
            $table->dropColumn('teacher_id');   // Then drop the column
        });
    }
};
