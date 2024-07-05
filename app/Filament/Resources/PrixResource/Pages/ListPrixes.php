<?php

namespace App\Filament\Resources\PrixResource\Pages;

use App\Filament\Resources\PrixResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrixes extends ListRecords
{
    protected static string $resource = PrixResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
