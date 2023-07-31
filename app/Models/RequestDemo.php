<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestDemo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'school_name',
        'position',
        'phone_number',
        'interests',
        'integration',
        'timeline',
    ];
}
