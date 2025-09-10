<?php

namespace App\Filament\Resources\ContactFormEntries\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactFormEntryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('company'),
                TextInput::make('subject')
                    ->required(),
                TextInput::make('priority'),
                TextInput::make('service_type'),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('department')
                    ->columnSpanFull(),
                Textarea::make('ip_address')
                    ->columnSpanFull(),
            ]);
    }
}
