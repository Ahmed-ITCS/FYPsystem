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
        Schema::create('project_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('document');
            $table->string("status")->default('awaiting'); 
            $table->unsignedBigInteger("sid"); // Use unsignedBigInteger for foreign keys
            $table->foreign('sid')->references('id')->on('users');
            $table->unsignedBigInteger('advisorID');
            $table->foreign('advisorID')->references('id')->on('users');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_applications');
    }
};
