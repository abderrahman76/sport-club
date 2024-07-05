<?php

namespace App\Filament\Resources\CentreResource\Pages;

use App\Filament\Resources\CentreResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCentre extends EditRecord
{
    protected static string $resource = CentreResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
