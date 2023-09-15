<?php

namespace App\Filament\Resources\CubicleResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\CubicleResource;

class CreateCubicle extends CreateRecord
{
    protected static string $resource = CubicleResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Cubicle Registered')
            ->body('Data Cubicle Berhasil ditambahkan');
    }
}
