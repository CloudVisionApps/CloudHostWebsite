<?php

namespace App\Filament\Resources\PlanFeatures\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PlanFeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('icon'),
                TextInput::make('type')
                    ->required()
                    ->default('boolean'),
                Textarea::make('options')
                    ->columnSpanFull(),
                TextInput::make('unit'),
                Toggle::make('is_addon')
                    ->required(),
                TextInput::make('addon_price')
                    ->numeric(),
                TextInput::make('addon_currency')
                    ->required()
                    ->default('USD'),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
