<?php

namespace App\Filament\Resources\CubicleResource\Pages;

use App\Filament\Resources\CubicleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCubicles extends ListRecords
{
    protected static string $resource = CubicleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
