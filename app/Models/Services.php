<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',         // Consultation, X-Ray, Drug
        'category',     // consultation | lab | drug
        'price',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function billItems()
    {
        return $this->hasMany(BillItem::class);
    }
}
