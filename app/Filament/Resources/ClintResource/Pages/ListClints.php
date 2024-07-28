<?php

namespace App\Filament\Resources\ClintResource\Pages;

use App\Filament\Resources\ClintResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClints extends ListRecords
{
    protected static string $resource = ClintResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
