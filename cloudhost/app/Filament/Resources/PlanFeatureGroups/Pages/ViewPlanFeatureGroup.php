<?php

namespace App\Filament\Resources\PlanFeatureGroups\Pages;

use App\Filament\Resources\PlanFeatureGroups\PlanFeatureGroupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlanFeatureGroup extends ViewRecord
{
    protected static string $resource = PlanFeatureGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
