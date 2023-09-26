<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacistSale extends Model
{
    use HasFactory;
    protected $fillable=[
        'pharmacistapproved'
    ];
    protected $table='pharmacistsales';
}
