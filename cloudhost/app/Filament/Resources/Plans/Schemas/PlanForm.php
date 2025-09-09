<?php

namespace App\Filament\Resources\Plans\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn (string $operation, $state, callable $set) =>
                                        $operation === 'create' ? $set('slug', str($state)->slug()) : null
                                    ),
                                TextInput::make('slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true)
//                                    ->rules(['alpha_dash'])
                                    ->helperText('Will be auto-generated from name if left empty'),
                            ]),
                        Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Pricing')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$')
                                    ->step(0.01)
                                    ->minValue(0),
                                Select::make('billing_cycle')
                                    ->required()
                                    ->options([
                                        'monthly' => 'Monthly',
                                        'yearly' => 'Yearly',
                                        'lifetime' => 'Lifetime',
                                    ])
                                    ->default('monthly'),
                                TextInput::make('sort_order')
                                    ->numeric()
                                    ->default(0)
                                    ->helperText('Lower numbers appear first'),
                            ]),
                    ]),

                Section::make('Hosting Resources')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('storage_gb')
                                    ->numeric()
                                    ->suffix('GB')
                                    ->minValue(0)
                                    ->helperText('Storage space in GB'),
                                TextInput::make('bandwidth_gb')
                                    ->numeric()
                                    ->suffix('GB')
                                    ->minValue(0)
                                    ->helperText('Monthly bandwidth in GB'),
                                TextInput::make('domains')
                                    ->numeric()
                                    ->minValue(0)
                                    ->helperText('Number of domains allowed'),
                            ]),
                        Grid::make(3)
                            ->schema([
                                TextInput::make('subdomains')
                                    ->numeric()
                                    ->minValue(0)
                                    ->helperText('Number of subdomains allowed'),
                                TextInput::make('databases')
                                    ->numeric()
                                    ->minValue(0)
                                    ->helperText('Number of databases allowed'),
                                TextInput::make('email_accounts')
                                    ->numeric()
                                    ->minValue(0)
                                    ->helperText('Number of email accounts'),
                            ]),
                        TextInput::make('ftp_accounts')
                            ->numeric()
                            ->minValue(0)
                            ->helperText('Number of FTP accounts')
                            ->columnSpan(1),
                    ]),

                Section::make('Features & Services')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                Toggle::make('ssl_certificate')
                                    ->label('SSL Certificate')
                                    ->helperText('Free SSL certificate included'),
                                Toggle::make('backup')
                                    ->label('Backup Service')
                                    ->helperText('Automated backup service'),
                            ]),
                        Grid::make(2)
                            ->schema([
                                Toggle::make('support_24_7')
                                    ->label('24/7 Support')
                                    ->helperText('Round-the-clock customer support'),
                                Toggle::make('is_featured')
                                    ->label('Featured Plan')
                                    ->helperText('Highlight this plan on the frontend'),
                            ]),
                    ]),

                Section::make('Additional Features')
                    ->schema([
                        Repeater::make('features')
                            ->schema([
                                TextInput::make('name')
                                    ->required()
                                    ->placeholder('Feature name'),
                                TextInput::make('value')
                                    ->placeholder('Feature value (optional)'),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Feature')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string => $state['name'] ?? null),
                    ]),

                Section::make('Status')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('Only active plans are shown to customers')
                            ->default(true),
                    ]),
            ]);
    }
}
