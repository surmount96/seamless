<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'job_title',
        'salary',
        'profile_pic',
        ''
    ];
}
