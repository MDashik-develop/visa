<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaType extends Model
{
    //
    protected $fillable = [
        'name',
        'country_id', // Added to store the associated country
        'description',
        'eligibility', // Added to store eligibility details
        'processing_time', // Added to store processing time
        // 'status',
    ];

}