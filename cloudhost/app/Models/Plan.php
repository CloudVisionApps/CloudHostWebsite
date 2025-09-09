<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Plan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'billing_cycle',
        'storage_gb',
        'bandwidth_gb',
        'domains',
        'subdomains',
        'databases',
        'email_accounts',
        'ftp_accounts',
        'ssl_certificate',
        'backup',
        'support_24_7',
        'is_featured',
        'is_active',
        'features',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'ssl_certificate' => 'boolean',
        'backup' => 'boolean',
        'support_24_7' => 'boolean',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'features' => 'array',
    ];

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => number_format($value, 2),
        );
    }

    public function getFormattedPriceAttribute(): string
    {
        return '$' . number_format($this->price, 2);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('price');
    }
}
