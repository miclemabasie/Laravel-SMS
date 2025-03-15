<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'klass_id',
        'teacher_id',
        'credits'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function klass()
    {
        return $this->belongsTo(Klass::class, 'klass_id');
    }


}