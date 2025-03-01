<?php

namespace App\Filament\Resources\EkstraWajibResource\Pages;

use App\Filament\Resources\EkstraWajibResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEkstraWajib extends EditRecord
{
    protected static string $resource = EkstraWajibResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
