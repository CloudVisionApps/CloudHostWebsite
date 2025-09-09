<?php

namespace App\Filament\Resources\PlanFeatureGroups;

use App\Filament\Resources\PlanFeatureGroups\Pages\CreatePlanFeatureGroup;
use App\Filament\Resources\PlanFeatureGroups\Pages\EditPlanFeatureGroup;
use App\Filament\Resources\PlanFeatureGroups\Pages\ListPlanFeatureGroups;
use App\Filament\Resources\PlanFeatureGroups\Pages\ViewPlanFeatureGroup;
use App\Filament\Resources\PlanFeatureGroups\Schemas\PlanFeatureGroupForm;
use App\Filament\Resources\PlanFeatureGroups\Schemas\PlanFeatureGroupInfolist;
use App\Filament\Resources\PlanFeatureGroups\Tables\PlanFeatureGroupsTable;
use App\Models\PlanFeatureGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlanFeatureGroupResource extends Resource
{
    protected static ?string $model = PlanFeatureGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PlanFeatureGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PlanFeatureGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlanFeatureGroupsTable::configure($table);
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
            'index' => ListPlanFeatureGroups::route('/'),
            'create' => CreatePlanFeatureGroup::route('/create'),
            'view' => ViewPlanFeatureGroup::route('/{record}'),
            'edit' => EditPlanFeatureGroup::route('/{record}/edit'),
        ];
    }
}
