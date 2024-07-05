<?php

namespace App\Filament\Resources\EvenementResource\Pages;

use App\Filament\Resources\EvenementResource;
use App\Filament\Resources\EvenementResource\Widgets\eventChart;
use App\Filament\Resources\EvenementResource\Widgets\eventStatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEvenements extends ListRecords
{
    protected static string $resource = EvenementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public  function getHeaderWidgets(): array
    {
        return [
            eventStatsOverview::class,
        ];
    }
}
