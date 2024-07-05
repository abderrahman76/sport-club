<?php

namespace App\Filament\Resources\prix_userResource\Pages;

use App\Filament\Resources\prix_userResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class Listprix_users extends ListRecords
{
    protected static string $resource = prix_userResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
