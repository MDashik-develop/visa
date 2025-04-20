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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); // User ID as integer
            $table->integer('visa_type_id'); // Visa Type ID as integer
            $table->string('name'); // Applicant's Name
            $table->string('phone'); // Applicant's Phone
            $table->string('mail'); // Applicant's Email
            $table->text('message')->nullable(); // Additional Message
            // $table->enum('status', ['pending', 'processing', 'approved', 'rejected'])->default('pending'); // Application Status
            $table->timestamp('submitted_at')->nullable(); // Submission Timestamp
            // $table->timestamp('approved_at')->nullable(); // Approval Timestamp
            $table->text('rejected_reason')->nullable(); // Reason for Rejection
            $table->timestamps(); // Created and Updated Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};