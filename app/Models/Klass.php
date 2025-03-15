<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klass extends Model
{
    protected $fillable = [
        'name',
        'section',
        'capacity',
        'academic_year',
    ];

    protected function teachers()
    {
        return $this->hasMany('teacher_id');
    }



}

