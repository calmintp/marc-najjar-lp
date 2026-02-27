<?php

namespace App\Filament\Resources\SpeakingRequests\Pages;

use App\Filament\Resources\SpeakingRequests\SpeakingRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSpeakingRequest extends EditRecord
{
    protected static string $resource = SpeakingRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
