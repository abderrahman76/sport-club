<?php

namespace App\Filament\Resources\AdhesionResource\Pages;

use App\Filament\Resources\AdhesionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdhesion extends EditRecord
{
    protected static string $resource = AdhesionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
