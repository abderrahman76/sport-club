<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('members', User::whereHas('adhesion')->count()),
            Card::make('all users', User::all()->count()),
            Card::make('all admins', User::where('isAdmin',1)->count())
        ];
    }
}
