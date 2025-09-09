<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'feature_ids',
        'feature_settings',
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
        'feature_ids' => 'array',
        'feature_settings' => 'array',
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

    /**
     * Get the features for this plan
     */
    public function features(): BelongsToMany
    {
        return $this->belongsToMany(PlanFeature::class, 'plan_plan_feature')
                    ->withPivot(['value', 'is_included', 'is_available', 'addon_price', 'sort_order'])
                    ->withTimestamps();
    }

    /**
     * Get only included features (not addons)
     */
    public function includedFeatures()
    {
        return $this->features()->wherePivot('is_included', true);
    }

    /**
     * Get available addon features
     */
    public function availableAddons()
    {
        return $this->features()->wherePivot('is_available', true)->where('is_addon', true);
    }

    /**
     * Get a specific feature value for this plan
     */
    public function getFeatureValue($featureSlug)
    {
        $feature = $this->features()->where('slug', $featureSlug)->first();
        return $feature ? $feature->pivot->value : null;
    }

    /**
     * Check if plan has a specific feature
     */
    public function hasFeature($featureSlug): bool
    {
        return $this->features()->where('slug', $featureSlug)->wherePivot('is_included', true)->exists();
    }

    /**
     * Check if plan has a specific addon available
     */
    public function hasAddonAvailable($featureSlug): bool
    {
        return $this->features()->where('slug', $featureSlug)->wherePivot('is_available', true)->exists();
    }

    /**
     * Sync features from form data
     */
    public function syncFeaturesFromFormData(array $featureIds = [], array $featureSettings = []): void
    {
        // Clear existing features
        $this->features()->detach();

        // Sync features with their settings
        foreach ($featureIds as $featureId) {
            $feature = PlanFeature::find($featureId);
            if (!$feature) continue;

            // Find settings for this feature
            $settings = collect($featureSettings)->firstWhere('feature_id', $featureId);
            
            $pivotData = [
                'value' => $settings['value'] ?? null,
                'is_included' => $settings['is_included'] ?? true,
                'is_available' => $settings['is_available'] ?? false,
                'addon_price' => $settings['addon_price'] ?? $feature->addon_price,
                'sort_order' => $feature->sort_order,
            ];

            $this->features()->attach($featureId, $pivotData);
        }
    }

    /**
     * Get form data for features
     */
    public function getFeatureFormData(): array
    {
        return [
            'feature_ids' => $this->features()->pluck('plan_features.id')->toArray(),
            'feature_settings' => $this->features()->get()->map(function ($feature) {
                return [
                    'feature_id' => $feature->id,
                    'value' => $feature->pivot->value,
                    'is_included' => $feature->pivot->is_included,
                    'is_available' => $feature->pivot->is_available,
                    'addon_price' => $feature->pivot->addon_price,
                ];
            })->toArray(),
        ];
    }
}
