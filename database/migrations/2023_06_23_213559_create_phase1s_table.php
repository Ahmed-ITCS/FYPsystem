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
        Schema::create('phase1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("sid"); // Use unsignedBigInteger for foreign keys
            $table->foreign('sid')->references('id')->on('users');
            $table->string('description');
            $table->string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phase1s');
    }
};
