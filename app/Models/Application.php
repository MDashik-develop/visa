<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = [
        
        'user_id', // User ID as integer
        'visa_type_id', // Visa Type ID as integer
        'name', // Applicant's Name
        'phone', // Applicant's Phone
        'mail', // Applicant's Email
        'message', // Additional Message
        'status', // Application Status
        'submitted_at', // Submission Timestamp
        'approved_at', // Approval Timestamp
        'rejected_reason', // Reason for Rejection
    ];
}