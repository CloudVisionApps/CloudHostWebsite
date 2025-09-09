<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
        'tld',
        'category',
        'registration_yearly_price',
        'renewal_yearly_price',
        'transfer_yearly_price',
        'currency',
    ];

    protected $casts = [
        'registration_yearly_price' => 'decimal:2',
        'renewal_yearly_price' => 'decimal:2',
        'transfer_yearly_price' => 'decimal:2',
    ];
}
