<?php

namespace App\Filament\Resources\SpeakingRequests\Pages;

use App\Filament\Resources\SpeakingRequests\SpeakingRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSpeakingRequests extends ListRecords
{
    protected static string $resource = SpeakingRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
