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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->longText('description');
            $table->string('countries');
            $table->tinyInteger('status')->default(1);
            $table->string('short_intro')->nullable();
            $table->string('session_intake')->nullable();
            $table->string('eligibility')->nullable();
            $table->string('application_deadline')->nullable();
            $table->string('degrees')->nullable();
            $table->string('documents_required')->nullable();
            $table->string('cost')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};