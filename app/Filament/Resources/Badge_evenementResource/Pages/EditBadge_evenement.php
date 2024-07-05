<?php

namespace App\Filament\Resources\Badge_evenementResource\Pages;

use App\Filament\Resources\Badge_evenementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBadge_evenement extends EditRecord
{
    protected static string $resource = Badge_evenementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
