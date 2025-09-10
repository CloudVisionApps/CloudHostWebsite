<?php

namespace App\Filament\Resources\ContactFormEntries\Pages;

use App\Filament\Resources\ContactFormEntries\ContactFormEntryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactFormEntry extends ViewRecord
{
    protected static string $resource = ContactFormEntryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
