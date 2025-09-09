<?php

namespace App\Filament\Resources\Plans\Pages;

use App\Filament\Resources\Plans\PlanResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePlan extends CreateRecord
{
    protected static string $resource = PlanResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Store feature data for after create
        $featureIds = $data['feature_ids'] ?? [];
        $featureSettings = $data['feature_settings'] ?? [];
        
        // Remove from main data to avoid conflicts
        unset($data['feature_ids'], $data['feature_settings']);
        
        // Store for after create hook
        $this->featureIds = $featureIds;
        $this->featureSettings = $featureSettings;
        
        return $data;
    }

    protected function afterCreate(): void
    {
        // Sync features after plan is created
        if (isset($this->featureIds) && isset($this->featureSettings)) {
            $this->record->syncFeaturesFromFormData($this->featureIds, $this->featureSettings);
        }
    }

    protected $featureIds = [];
    protected $featureSettings = [];
}
