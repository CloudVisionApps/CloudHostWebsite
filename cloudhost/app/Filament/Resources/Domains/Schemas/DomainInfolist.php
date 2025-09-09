<?php

namespace App\Filament\Resources\Domains\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class DomainInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('tld')
                    ->placeholder('-'),
                TextEntry::make('category')
                    ->placeholder('-'),
                TextEntry::make('registration_yearly_price')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('renewal_yearly_price')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('transfer_yearly_price')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('currency')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
