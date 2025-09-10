<?php

namespace App\Filament\Resources\ContactFormEntries\Pages;

use App\Filament\Resources\ContactFormEntries\ContactFormEntryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactFormEntries extends ListRecords
{
    protected static string $resource = ContactFormEntryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
