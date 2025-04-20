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
        Schema::create('visa_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('countries'); // List of countries
            $table->longText('description')->nullable(); // Detailed description
            $table->longText('eligibility')->nullable(); // Eligibility criteria
            $table->longText('documents')->nullable(); // Required documents
            $table->string('processing_time')->nullable(); // Processing time (e.g., "7-10 days")
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_types');
    }
};