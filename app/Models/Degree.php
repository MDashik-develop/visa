<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'status',
    ];
}