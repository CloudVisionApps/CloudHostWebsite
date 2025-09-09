<?php

namespace App\Filament\Resources\Plans\Schemas;

use App\Models\PlanFeature;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->columnSpanFull()
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

                                    Select::make('group_id')
                                        ->label('Plan Group')
                                        ->relationship('group', 'name')
                                        ->searchable()
                                        ->preload()
                                        ->required()
                                        ->columnSpanFull()
                                        ->helperText('Select the group this plan belongs to'),
                            ]),
                        Textarea::make('description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),

                Section::make('Pricing')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextInput::make('monthly_price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$')
                                    ->step(0.01)
                                    ->minValue(0),
                                TextInput::make('yearly_price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$')
                                    ->step(0.01)
                                    ->minValue(0)
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

                Section::make('Plan Features')
                    ->columnSpanFull()
                    ->schema([
                        CheckboxList::make('feature_ids')
                            ->label('Select Features')
                            ->options(PlanFeature::active()->ordered()->pluck('name', 'id'))
                            ->descriptions(PlanFeature::active()->ordered()->pluck('description', 'id'))
                            ->columns(2)
                            ->bulkToggleable()
                            ->searchable()
                            ->helperText('Select which features are included in this plan')
                            ->live()
                            ->afterStateUpdated(function ($state, callable $set) {
                                // Auto-populate feature_settings when features are selected
                                $selectedFeatures = collect($state ?? []);
                                $currentSettings = collect();

                                $selectedFeatures->each(function ($featureId) use ($currentSettings) {
                                    $feature = PlanFeature::find($featureId);
                                    if ($feature) {
                                        $currentSettings->push([
                                            'feature_id' => $featureId,
                                            'value' => $feature->isNumeric() ? '1' : null,
                                            'is_included' => true,
                                            'is_available' => $feature->is_addon,
                                            'addon_price' => $feature->addon_price,
                                        ]);
                                    }
                                });

                                $set('feature_settings', $currentSettings->toArray());
                            }),
                    ]),

                Section::make('Feature Values & Settings')
                    ->columnSpanFull()
                    ->schema([
                        Repeater::make('feature_settings')
                            ->schema([
                                Select::make('feature_id')
                                    ->label('Feature')
                                    ->options(PlanFeature::active()->ordered()->pluck('name', 'id'))
                                    ->required()
                                    ->searchable()
                                    ->live(),
                                TextInput::make('value')
                                    ->label('Value')
                                    ->placeholder('Feature value (e.g., "100" for 100GB storage)')
                                    ->helperText('Leave empty for boolean features'),
                                Toggle::make('is_included')
                                    ->label('Included in Plan')
                                    ->default(true)
                                    ->helperText('Is this feature included in the base plan?'),
                                Toggle::make('is_available')
                                    ->label('Available as Addon')
                                    ->default(false)
                                    ->helperText('Can customers add this as an upgrade?'),
                                TextInput::make('addon_price')
                                    ->label('Addon Price Override')
                                    ->numeric()
                                    ->prefix('$')
                                    ->step(0.01)
                                    ->minValue(0)
                                    ->helperText('Override the default addon price for this plan'),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Feature Setting')
                            ->collapsible()
                            ->itemLabel(fn (array $state): ?string =>
                                $state['feature_id'] ? PlanFeature::find($state['feature_id'])?->name : 'New Feature Setting'
                            ),
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
