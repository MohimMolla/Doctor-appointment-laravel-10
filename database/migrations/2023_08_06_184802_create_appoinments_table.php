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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // $table->text('speciality_id')->nullable();
            $table->unsignedBigInteger("doctor_id");
            $table->foreign('doctor_id')->references('id')->on('doctors');
            // ................
            // $table->text('speciality_name')->nullable();
            $table->unsignedBigInteger("speciality_id");
            $table->foreign('speciality_id')->references('id')->on('specialities');
            // ...................
            $table->date('date')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appoinments');
    }
};
