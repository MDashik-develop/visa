<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisaType extends Model
{
    //
    protected $fillable = [
        'name',
        'countries', // Added to store the associated country
        'description',
        'eligibility', // Added to store eligibility details
        'processing_time', // Added to store processing time
        'cost', // Added to store cost details
        // 'status',
    ];

}