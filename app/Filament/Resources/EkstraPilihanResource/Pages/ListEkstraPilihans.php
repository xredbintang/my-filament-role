<?php

namespace App\Filament\Resources\EkstraPilihanResource\Pages;

use App\Filament\Resources\EkstraPilihanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEkstraPilihans extends ListRecords
{
    protected static string $resource = EkstraPilihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
