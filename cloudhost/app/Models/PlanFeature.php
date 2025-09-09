<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlanFeature extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'type',
        'options',
        'unit',
        'is_addon',
        'addon_price',
        'addon_currency',
        'is_active',
        'sort_order',
        'group_id',
    ];

    protected $casts = [
        'options' => 'array',
        'is_addon' => 'boolean',
        'addon_price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    /**
     * Get the plans that have this feature
     */
    public function plans(): BelongsToMany
    {
        return $this->belongsToMany(Plan::class, 'plan_plan_feature')
                    ->withPivot(['value', 'is_included', 'is_available', 'addon_price', 'sort_order'])
                    ->withTimestamps();
    }

    /**
     * Get the group that this feature belongs to
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(PlanFeatureGroup::class, 'group_id');
    }

    /**
     * Scope for active features
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for addon features
     */
    public function scopeAddons($query)
    {
        return $query->where('is_addon', true);
    }

    /**
     * Scope for core features (not addons)
     */
    public function scopeCore($query)
    {
        return $query->where('is_addon', false);
    }

    /**
     * Scope for ordered features
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    /**
     * Get formatted addon price
     */
    public function getFormattedAddonPriceAttribute(): ?string
    {
        return $this->addon_price ? $this->addon_currency . ' ' . number_format($this->addon_price, 2) : null;
    }

    /**
     * Check if feature is boolean type
     */
    public function isBoolean(): bool
    {
        return $this->type === 'boolean';
    }

    /**
     * Check if feature is numeric type
     */
    public function isNumeric(): bool
    {
        return $this->type === 'numeric';
    }

    /**
     * Check if feature is select type
     */
    public function isSelect(): bool
    {
        return $this->type === 'select';
    }

    /**
     * Check if feature is text type
     */
    public function isText(): bool
    {
        return $this->type === 'text';
    }
}
