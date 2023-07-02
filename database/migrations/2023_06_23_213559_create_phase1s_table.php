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
            $table->unsignedBigInteger("pid"); // Use unsignedBigInteger for foreign keys
            $table->foreign('pid')->references('id')->on('projects');
            $table->string('description');
            $table->string('document');
            $table->integer('marks')->default(0);
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
