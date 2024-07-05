<?php

namespace App\Filament\Resources\OffreResource\Pages;

use App\Filament\Resources\OffreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffre extends EditRecord
{
    protected static string $resource = OffreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
