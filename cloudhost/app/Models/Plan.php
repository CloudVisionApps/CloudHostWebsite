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
        'monthly_price',
        'yearly_price',
        'currency',
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
        'monthly_price' => 'decimal:2',
        'yearly_price' => 'decimal:2',
        'ssl_certificate' => 'boolean',
        'backup' => 'boolean',
        'support_24_7' => 'boolean',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'features' => 'array',
    ];

    protected function monthlyPrice(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => number_format($value, 2),
        );
    }

    protected function yearlyPrice(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => $value ? number_format($value, 2) : null,
        );
    }

    public function getFormattedMonthlyPriceAttribute(): string
    {
        return '$' . number_format($this->monthly_price, 2);
    }

    public function getFormattedYearlyPriceAttribute(): ?string
    {
        return $this->yearly_price ? '$' . number_format($this->yearly_price, 2) : null;
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
        return $query->orderBy('sort_order')->orderBy('monthly_price');
    }
}
