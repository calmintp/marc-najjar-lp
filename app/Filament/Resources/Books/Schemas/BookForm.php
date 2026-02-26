<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('amazon_link')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')    
                    ->directory('books')
                    ->visibility('public')
                    ->required(),
                Toggle::make('is_best_seller')
                    ->required(),
                TextInput::make('position')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
