<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = [
        'user_id', // User ID as integer
        'countrie', // Visa Type ID as integer
        'name', // Applicant's Name
        'phone', // Applicant's Phone
        'email', // Applicant's Email
        'message', // Additional Message
    ];
}