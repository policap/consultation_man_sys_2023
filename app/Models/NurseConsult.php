<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NurseConsult extends Model
{
    use HasFactory;
    protected $fillable=[
        'bp',
        'wt',
        'temp',
        'patientreport',
        'nurseobservation'
        
    ];
    protected $table='nurseconsults';
}
