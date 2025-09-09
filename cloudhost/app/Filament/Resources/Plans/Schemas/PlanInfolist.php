<?php

namespace App\Filament\Resources\Plans\Schemas;


use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PlanInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Plan Details')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextEntry::make('name')
                                    ->label('Plan Name'),
                                TextEntry::make('slug')
                                    ->label('Slug'),
                            ]),
                        TextEntry::make('description')
                            ->label('Description')
                            ->columnSpanFull(),
                    ]),

                Section::make('Pricing')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextEntry::make('formatted_price')
                                    ->label('Price'),
                                TextEntry::make('billing_cycle')
                                    ->label('Billing Cycle')
                                    ->badge()
                                    ->color(fn (string $state): string => match ($state) {
                                        'monthly' => 'info',
                                        'yearly' => 'success',
                                        'lifetime' => 'warning',
                                        default => 'gray',
                                    }),
                                TextEntry::make('sort_order')
                                    ->label('Sort Order'),
                            ]),
                    ]),

                Section::make('Hosting Resources')
                    ->schema([
                        Grid::make(3)
                            ->schema([
                                TextEntry::make('storage_gb')
                                    ->label('Storage')
                                    ->suffix(' GB')
                                    ->placeholder('Unlimited'),
                                TextEntry::make('bandwidth_gb')
                                    ->label('Bandwidth')
                                    ->suffix(' GB/month')
                                    ->placeholder('Unlimited'),
                                TextEntry::make('domains')
                                    ->label('Domains')
                                    ->placeholder('Unlimited'),
                            ]),
                        Grid::make(3)
                            ->schema([
                                TextEntry::make('subdomains')
                                    ->label('Subdomains')
                                    ->placeholder('Unlimited'),
                                TextEntry::make('databases')
                                    ->label('Databases')
                                    ->placeholder('Unlimited'),
                                TextEntry::make('email_accounts')
                                    ->label('Email Accounts')
                                    ->placeholder('Unlimited'),
                            ]),
                        TextEntry::make('ftp_accounts')
                            ->label('FTP Accounts')
                            ->placeholder('Unlimited')
                            ->columnSpan(1),
                    ]),

                Section::make('Features & Services')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                IconEntry::make('ssl_certificate')
                                    ->label('SSL Certificate')
                                    ->boolean(),
                                IconEntry::make('backup')
                                    ->label('Backup Service')
                                    ->boolean(),
                            ]),
                        Grid::make(2)
                            ->schema([
                                IconEntry::make('support_24_7')
                                    ->label('24/7 Support')
                                    ->boolean(),
                                IconEntry::make('is_featured')
                                    ->label('Featured Plan')
                                    ->boolean(),
                            ]),
                    ]),

                Section::make('Additional Features')
                    ->schema([
                        RepeatableEntry::make('features')
                            ->schema([
                                TextEntry::make('name'),
                                TextEntry::make('value')
                                    ->columnSpan(2),
                            ])
                            ->columns(2)
                    ]),

                Section::make('Status')
                    ->schema([
                        IconEntry::make('is_active')
                            ->label('Active')
                            ->boolean(),
                    ]),
            ]);
    }
}
