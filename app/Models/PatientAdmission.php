<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAdmission extends Model
{
    use HasFactory;
    protected $fillable=[
        'patientadmission'
    ];
    protected $table="patientadmissions";
}
