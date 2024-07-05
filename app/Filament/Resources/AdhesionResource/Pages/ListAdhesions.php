<?php

namespace App\Filament\Resources\AdhesionResource\Pages;

use App\Filament\Resources\AdhesionResource;
use App\Filament\Resources\AdhesionResource\Widgets\AdhesionChart;
use App\Filament\Widgets\StatsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdhesions extends ListRecords
{
    protected static string $resource = AdhesionResource::class;
    

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public  function getHeaderWidgets(): array
{
    return [
        AdhesionChart::class,
    ];
}
}
