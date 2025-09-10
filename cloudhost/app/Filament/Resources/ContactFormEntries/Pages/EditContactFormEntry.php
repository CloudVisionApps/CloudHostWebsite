<?php

namespace App\Filament\Resources\ContactFormEntries\Pages;

use App\Filament\Resources\ContactFormEntries\ContactFormEntryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactFormEntry extends EditRecord
{
    protected static string $resource = ContactFormEntryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
