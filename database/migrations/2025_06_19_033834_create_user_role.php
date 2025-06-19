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
        Schema::create('user_role', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->comment('ID of the user');
            $table->unsignedBigInteger('role_id')->comment('ID of the role');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->comment('Foreign key referencing users table');
            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onDelete('cascade')
                ->comment('Foreign key referencing roles table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_role');
    }
};
