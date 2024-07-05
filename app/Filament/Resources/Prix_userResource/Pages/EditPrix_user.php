<?php

namespace App\Filament\Resources\prix_userResource\Pages;

use App\Filament\Resources\prix_userResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class Editprix_user extends EditRecord
{
    protected static string $resource = prix_userResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
