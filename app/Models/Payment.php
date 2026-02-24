<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'bill_id',
        'amount_paid',
        'payment_method',     // cash | mpesa | card
        'transaction_reference',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
