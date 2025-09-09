<?php

namespace App\Filament\Resources\PlanGroups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlanGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('description')->nullable(),
                TextInput::make('sort_order')->numeric()->default(0),
            ]);
    }
}
