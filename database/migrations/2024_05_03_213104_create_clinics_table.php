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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('medical_specialty',['dental','women','cosmetic','children','eye','ear_nose_and_throat','dermatology','x_ray','psychiatric','orthopedic_surgery','physical_therapy','forensic']);
            $table->string('address');
            $table->text('description')->nullable();
            $table->unsignedInteger('inspection_cost');
            $table->unsignedInteger('inspection_time');
            $table->unsignedInteger('number_of_booking_times')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
