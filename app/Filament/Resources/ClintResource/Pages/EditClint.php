<?php

namespace App\Filament\Resources\ClintResource\Pages;

use App\Filament\Resources\ClintResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClint extends EditRecord
{
    protected static string $resource = ClintResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
