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

    public function klasses()
    {
        return $this->belongsToMany(Klass::class, 'teacher_klass', 'teacher_id', 'klass_id');
    }

    public function subjects()
    {
        return $this->hasMany('App\Models\Subject');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


