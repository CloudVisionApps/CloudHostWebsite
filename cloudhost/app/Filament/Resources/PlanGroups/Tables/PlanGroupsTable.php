<?php

namespace App\Filament\Resources\PlanGroups\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Guava\IconPicker\Tables\Columns\IconColumn;

class PlanGroupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('icon'),
                TextColumn::make('name'),
//                TextColumn::make('description'),
//                TextColumn::make('sort_order')->sortable()->searchable(),
//                TextColumn::make('is_active')->label('Status')->sortable()->searchable(),
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
