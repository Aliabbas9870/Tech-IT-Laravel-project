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
    {Schema::create('subscibe', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('email')->default('');

    });}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
