<?php

namespace App\Filament\Resources\PlanFeatures\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Grouping\Group;

class PlanFeaturesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('group.name')
                    ->label('Group')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Сървър' => 'primary',
                        'Производителност' => 'success',
                        'Сигурност' => 'danger',
                        'Разработка' => 'warning',
                        'Бази данни' => 'indigo',
                        'Имейл' => 'teal',
                        'WordPress Поддръжка' => 'orange',
                        default => 'gray',
                    }),
                TextColumn::make('slug')
                    ->searchable(),
                \Guava\IconPicker\Tables\Columns\IconColumn::make('icon')
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('unit')
                    ->searchable(),
                IconColumn::make('is_addon')
                    ->boolean(),
                TextColumn::make('addon_price')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('addon_currency')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->groups([
                Group::make('group.name')
                    ->label('Feature Group')
                    ->collapsible()
                    ->titlePrefixedWithLabel(false),
            ])
            ->defaultGroup('group.name')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
