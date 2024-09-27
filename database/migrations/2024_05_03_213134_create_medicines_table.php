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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clinic_id')->constrained('clinics','id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('name');
            $table->text('description');
            $table->unsignedInteger('concentration')->nullable();
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('price');
            $table->date('expiration_date'); 
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
