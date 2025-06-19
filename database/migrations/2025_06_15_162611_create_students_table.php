<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('student first name.');
            $table->string('last_name')->comment('student last name.');
            $table->string('program')->comment('student enrolled program.');
            $table->string('enrollment_year')->comment('student enrollment year.')->max(4);
            $table->dateTime('birthday')->comment('student date of birth.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        {
            Schema::dropIfExists('students');
        }
    }
};
