<?php

namespace App\Filament\Resources\PlanFeatureGroups\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Guava\IconPicker\Tables\Columns\IconColumn;

class PlanFeatureGroupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('icon')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('icon_color')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
//                TextColumn::make('sort_order')
//                    ->numeric()
//                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->reorderable('sort_order')
            ->filters([
                //
            ])
            ->recordActions([
//                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
