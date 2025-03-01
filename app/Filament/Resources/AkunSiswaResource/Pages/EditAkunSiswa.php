<?php

namespace App\Filament\Resources\AkunSiswaResource\Pages;

use App\Filament\Resources\AkunSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAkunSiswa extends EditRecord
{
    protected static string $resource = AkunSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
