<?php

namespace App\Filament\Resources\PlanGroups\Pages;

use App\Filament\Resources\PlanGroups\PlanGroupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPlanGroup extends ViewRecord
{
    protected static string $resource = PlanGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
