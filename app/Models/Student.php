<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
        'admission_number',
        'klass_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function klass()
    {
        return $this->belongsTo(klass::class);
    }



}
