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

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_klass', 'klass_id', 'teacher_id');
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }



}
