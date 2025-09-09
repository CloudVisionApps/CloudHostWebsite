<?php

namespace App\Filament\Resources\PlanGroups\Pages;

use App\Filament\Resources\PlanGroups\PlanGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPlanGroup extends EditRecord
{
    protected static string $resource = PlanGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
