<?php

namespace App\Filament\Resources\CubicleResource\Pages;

use App\Filament\Resources\CubicleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCubicle extends EditRecord
{
    protected static string $resource = CubicleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
