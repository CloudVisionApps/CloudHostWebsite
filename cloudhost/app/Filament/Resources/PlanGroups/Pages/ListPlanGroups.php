<?php

namespace App\Filament\Resources\PlanGroups\Pages;

use App\Filament\Resources\PlanGroups\PlanGroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlanGroups extends ListRecords
{
    protected static string $resource = PlanGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
