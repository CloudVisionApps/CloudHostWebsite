<?php

namespace App\Filament\Resources\Plans\Pages;

use App\Filament\Resources\Plans\PlanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlan extends EditRecord
{
    protected static string $resource = PlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Load existing feature data
        if (method_exists($this->record, 'getFeatureFormData')) {
            $featureData = $this->record->getFeatureFormData();
            $data = array_merge($data, $featureData);
        }
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Store feature data for after save
        $featureIds = $data['feature_ids'] ?? [];
        $featureSettings = $data['feature_settings'] ?? [];
        
        // Remove from main data to avoid conflicts
        unset($data['feature_ids'], $data['feature_settings']);
        
        // Store for after save hook
        $this->featureIds = $featureIds;
        $this->featureSettings = $featureSettings;
        
        return $data;
    }

    protected function afterSave(): void
    {
        // Sync features after plan is updated
        if (isset($this->featureIds) && isset($this->featureSettings)) {
            $this->record->syncFeaturesFromFormData($this->featureIds, $this->featureSettings);
        }
    }

    protected $featureIds = [];
    protected $featureSettings = [];
}
