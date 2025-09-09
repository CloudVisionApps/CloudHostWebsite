<?php

namespace App\Filament\Resources\FAQS\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FAQForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('question'),
                Textarea::make('answer')->rows(5),
                Select::make('page')->options([
                    'general' => 'General',
                    'billing' => 'Billing',
                    'technical' => 'Technical',
                    'sales' => 'Sales',
                ]),
                Select::make('is_active')->options([
                    1 => 'Active',
                    0 => 'Inactive',
                ])->default(1),
                Select::make('sort_order')->options(array_combine(range(0, 100), range(0, 100)))->default(0),
            ]);
    }
}
