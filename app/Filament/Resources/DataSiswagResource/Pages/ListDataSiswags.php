<?php

namespace App\Filament\Resources\DataSiswagResource\Pages;

use App\Filament\Resources\DataSiswagResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataSiswags extends ListRecords
{
    protected static string $resource = DataSiswagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
