<?php

namespace App\Filament\Resources\OffreResource\Pages;

use App\Filament\Resources\OffreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOffres extends ListRecords
{
    protected static string $resource = OffreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
