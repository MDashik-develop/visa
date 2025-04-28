<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $fillable = [
        'name',
        'image',
        'description',
        'status',
        'short_intro',
        'session_intake',
        'eligibility',
        'application_deadline',
        'documents_required',
        'cost',
        'degrees',
        'countries',
    ];
}