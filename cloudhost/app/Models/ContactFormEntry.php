<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactFormEntry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'subject',
        'priority',
        'service_type',
        'message',
        'department'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
