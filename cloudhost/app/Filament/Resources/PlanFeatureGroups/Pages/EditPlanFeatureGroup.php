<?php

namespace App\Filament\Resources\PlanFeatureGroups\Pages;

use App\Filament\Resources\PlanFeatureGroups\PlanFeatureGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlanFeatureGroup extends EditRecord
{
    protected static string $resource = PlanFeatureGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
