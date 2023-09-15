<?php

namespace App\Filament\Resources\AlatUjiResource\Pages;

use App\Filament\Resources\AlatUjiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlatUji extends EditRecord
{
    protected static string $resource = AlatUjiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
