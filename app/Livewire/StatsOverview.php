<?php

namespace App\Livewire;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Speaking Requests', \App\Models\SpeakingRequest::count())
            ->description('Total requests received')
            ->icon('heroicon-o-microphone')
            ->color('success'),

        Stat::make('Videos', \App\Models\Video::count())
            ->description('Published videos')
            ->icon('heroicon-o-video-camera')
            ->color('primary'),

        Stat::make('Books', \App\Models\Book::count())
            ->description('Books available')
            ->icon('heroicon-o-book-open')
            ->color('warning'),

        Stat::make('Subscribers', \App\Models\Subscriber::count())
            ->description('Email subscribers')
            ->icon('heroicon-o-envelope')
            ->color('info'),//
        ];
    }
}
