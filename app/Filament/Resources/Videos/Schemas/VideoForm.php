<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required()
                    ->rows(3),
                TextInput::make('link')
                    ->required()
                    ->label('Video URL')
                    ->url(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('videos')
                    ->visibility('public')
                    ->nullable(),
                TextInput::make('position')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
