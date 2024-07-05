<?php

namespace App\Filament\Resources\AvantageResource\Pages;

use App\Filament\Resources\AvantageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvantage extends EditRecord
{
    protected static string $resource = AvantageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
