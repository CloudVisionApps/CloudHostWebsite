<?php

namespace App\Filament\Resources\ContactFormEntries;

use App\Filament\Resources\ContactFormEntries\Pages\CreateContactFormEntry;
use App\Filament\Resources\ContactFormEntries\Pages\EditContactFormEntry;
use App\Filament\Resources\ContactFormEntries\Pages\ListContactFormEntries;
use App\Filament\Resources\ContactFormEntries\Pages\ViewContactFormEntry;
use App\Filament\Resources\ContactFormEntries\Schemas\ContactFormEntryForm;
use App\Filament\Resources\ContactFormEntries\Schemas\ContactFormEntryInfolist;
use App\Filament\Resources\ContactFormEntries\Tables\ContactFormEntriesTable;
use App\Models\ContactFormEntry;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactFormEntryResource extends Resource
{
    protected static ?string $model = ContactFormEntry::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'email';

    public static function form(Schema $schema): Schema
    {
        return ContactFormEntryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactFormEntryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactFormEntriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContactFormEntries::route('/'),
            'create' => CreateContactFormEntry::route('/create'),
            'view' => ViewContactFormEntry::route('/{record}'),
            'edit' => EditContactFormEntry::route('/{record}/edit'),
        ];
    }
}
