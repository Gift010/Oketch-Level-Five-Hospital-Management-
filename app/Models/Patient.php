<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'phone',
        'address',
        'start_date',
        'end_date',

        // Medical fields
        'bp',
        'temp',
        'weight',
        'diagnosis',
        'medical_notes',
    ];
}
