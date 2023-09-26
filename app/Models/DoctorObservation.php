<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorObservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'doctorobservation'
    ];
    protected $table='doctorobservations';
}
