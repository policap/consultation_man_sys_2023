<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Nurse extends User
{
    use HasFactory;
    protected $fillable=[
        'fname',
        'lname',
        'gender',
        'contact',
        'email',
        'password'
    ];
}
