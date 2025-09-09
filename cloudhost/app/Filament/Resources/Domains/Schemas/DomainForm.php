<?php

namespace App\Filament\Resources\Domains\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DomainForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tld'),
                TextInput::make('category'),
                TextInput::make('registration_yearly_price')
                    ->numeric(),
                TextInput::make('renewal_yearly_price')
                    ->numeric(),
                TextInput::make('transfer_yearly_price')
                    ->numeric(),
                TextInput::make('currency')
                    ->default('USD'),
            ]);
    }
}
