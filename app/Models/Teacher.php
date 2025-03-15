<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'dob',
        'address',
        'qualification',
        'specialization',
        'employment_date',
        'status'
    ];
}
