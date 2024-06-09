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
        Schema::create('admin_register', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');

            $table->string('email');
            $table->string('username')->default('admin');
            $table->string('password');
            $table->string('status')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_admin_register');
    }
};
