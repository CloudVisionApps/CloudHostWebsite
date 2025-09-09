<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanGroup extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'sort_order',
        'is_active',
        'icon',
        'icon_color',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
