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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
           
            $table->unsignedBigInteger('speciality_id')->nullable();

            $table->foreign('speciality_id')->references('id')->on('specialities');

            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->text('speciality')->nullable();
            $table->string('room_number')->nullable();
            $table->text('achievement')->nullable();
            $table->text('institute')->nullable();
            $table->text('doctor_details')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
