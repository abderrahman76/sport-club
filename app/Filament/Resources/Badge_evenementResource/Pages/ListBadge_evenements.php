<?php

namespace App\Filament\Resources\Badge_evenementResource\Pages;

use App\Filament\Resources\Badge_evenementRecource\Widgets\eventChart;
use App\Filament\Resources\Badge_evenementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBadge_evenements extends ListRecords
{
    protected static string $resource = Badge_evenementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public  function getHeaderWidgets(): array
    {
        return [
            eventChart::class,
        ];
    }
}
