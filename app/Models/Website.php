<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    //
    protected $fillable = [
        'name',
        'logo',
        'title',
        'description',
        'about',
        'address',
        'email',
        'phone',
    ];
    
}