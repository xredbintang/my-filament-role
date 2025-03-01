<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstraWajibResource\Pages;
use App\Filament\Resources\EkstraWajibResource\RelationManagers;
use App\Models\EkstraWajib;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EkstraWajibResource extends Resource
{
    protected static ?string $model = EkstraWajib::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $navigationLabel = 'Ekstra Wajib';
    protected static ?string $navigationGroup = 'Ekstrakulikuler';
    protected static ?int $navigationSort = 9;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEkstraWajibs::route('/'),
            'create' => Pages\CreateEkstraWajib::route('/create'),
            'edit' => Pages\EditEkstraWajib::route('/{record}/edit'),
        ];
    }
}
