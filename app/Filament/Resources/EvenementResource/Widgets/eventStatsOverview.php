<?php

namespace App\Filament\Resources\EvenementResource\Widgets;

use App\Models\evenement;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class eventStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            // Card::make('members', evenement::whereHas('adhesion')->count()),
            Card::make('all events', evenement::all()->count()),
            Card::make('premuim events', evenement::where('isPremium',1)->count())
        ];
    }
}
