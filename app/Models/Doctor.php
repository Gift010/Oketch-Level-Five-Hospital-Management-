<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_number',
        'Patient_name',
        'Appointed_date',
        'start_date',
        'end_date',
    ];
}
