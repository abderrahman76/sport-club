<?php

namespace App\Filament\Resources\AvantageResource\Pages;

use App\Filament\Resources\AvantageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAvantages extends ListRecords
{
    protected static string $resource = AvantageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
