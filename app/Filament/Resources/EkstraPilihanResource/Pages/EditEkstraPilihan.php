<?php

namespace App\Filament\Resources\EkstraPilihanResource\Pages;

use App\Filament\Resources\EkstraPilihanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEkstraPilihan extends EditRecord
{
    protected static string $resource = EkstraPilihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
