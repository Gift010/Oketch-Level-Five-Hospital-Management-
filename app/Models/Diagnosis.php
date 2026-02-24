<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID_number',
        'Diagnosis',
        'Medical_note',
        'pdf_path',
        'start_date',
        'end_date',
    ];
}
