<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class Register extends User
{
    use HasFactory;
    protected $fillable=[
        'fname',
        'lname',
        'contact',
        'dob',
        'email',
        'password'
    ];
}
