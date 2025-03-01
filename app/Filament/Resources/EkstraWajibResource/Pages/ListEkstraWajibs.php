<?php

namespace App\Filament\Resources\EkstraWajibResource\Pages;

use App\Filament\Resources\EkstraWajibResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEkstraWajibs extends ListRecords
{
    protected static string $resource = EkstraWajibResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
