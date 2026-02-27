<?php

namespace App\Filament\Resources\SpeakingRequests;
use App\Filament\Resources\SpeakingRequests\Pages\EditSpeakingRequest;
use App\Filament\Resources\SpeakingRequests\Pages\ListSpeakingRequests;
use App\Filament\Resources\SpeakingRequests\Schemas\SpeakingRequestForm;
use App\Filament\Resources\SpeakingRequests\Tables\SpeakingRequestsTable;
use App\Models\SpeakingRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SpeakingRequestResource extends Resource
{
    protected static ?string $model = SpeakingRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'subject';

    public static function form(Schema $schema): Schema
    {
        return SpeakingRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SpeakingRequestsTable::configure($table);
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
            'index' => ListSpeakingRequests::route('/'),
            'edit' => EditSpeakingRequest::route('/{record}/edit'),
        ];
    }
}
