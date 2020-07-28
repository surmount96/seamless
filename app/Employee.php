<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'full_name',
        'job_title',
        'salary',
        'increase',
        'decrease',
        'start',
        'end',
        'profile_pic',
        'appointment',
        'status'
    ];
}
