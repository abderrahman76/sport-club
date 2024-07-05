<?php

namespace App\Filament\Resources\PrixResource\Pages;

use App\Filament\Resources\PrixResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrix extends EditRecord
{
    protected static string $resource = PrixResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
