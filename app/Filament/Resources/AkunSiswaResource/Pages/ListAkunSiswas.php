<?php

namespace App\Filament\Resources\AkunSiswaResource\Pages;

use App\Filament\Resources\AkunSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAkunSiswas extends ListRecords
{
    protected static string $resource = AkunSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
