<?php

namespace App\Filament\Resources\PlanGroups;

use App\Filament\Resources\PlanGroups\Pages\CreatePlanGroup;
use App\Filament\Resources\PlanGroups\Pages\EditPlanGroup;
use App\Filament\Resources\PlanGroups\Pages\ListPlanGroups;
use App\Filament\Resources\PlanGroups\Pages\ViewPlanGroup;
use App\Filament\Resources\PlanGroups\Schemas\PlanGroupForm;
use App\Filament\Resources\PlanGroups\Schemas\PlanGroupInfolist;
use App\Filament\Resources\PlanGroups\Tables\PlanGroupsTable;
use App\Models\PlanGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlanGroupResource extends Resource
{
    protected static ?string $model = PlanGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PlanGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlanGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlanGroupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPlanGroups::route('/'),
            'create' => CreatePlanGroup::route('/create'),
            'view' => ViewPlanGroup::route('/{record}'),
            'edit' => EditPlanGroup::route('/{record}/edit'),
        ];
    }
}
