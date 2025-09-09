<?php

namespace App\Filament\Resources\PlanFeatureGroups\Pages;

use App\Filament\Resources\PlanFeatureGroups\PlanFeatureGroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlanFeatureGroups extends ListRecords
{
    protected static string $resource = PlanFeatureGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
