<?php

namespace App\Filament\Resources\ContactFormEntries\Pages;

use App\Filament\Resources\ContactFormEntries\ContactFormEntryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContactFormEntry extends CreateRecord
{
    protected static string $resource = ContactFormEntryResource::class;
}
